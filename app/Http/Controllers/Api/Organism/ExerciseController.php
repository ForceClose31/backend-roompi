<?php

namespace App\Http\Controllers\Api\Organism;

use App\Http\Controllers\Controller;
use App\Models\Bagian;
use App\Models\Category;
use App\Models\Pilihan;
use App\Models\Remaja;
use App\Models\ReportExercise;
use App\Models\Soal;
use App\Models\SubBagian;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function getExercise(Request $request)
    {
        $user = $request->user();

        if ($user->role !== 'Remaja') {
            return response()->json([
                'status' => 'failed',
                'message' => 'Unauthorized access'
            ], 403);
        }

        $remaja = Remaja::where('user_id', $user->id)->first();

        if (!$remaja) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Remaja not found'
            ], 404);
        }

        $activityId = $remaja->activity_id;
        $paketId = $remaja->paket_id;

        $reportExercises = ReportExercise::where('remaja_id', $remaja->id)
            ->where('activity_id', $activityId)
            ->where('paket_id', $paketId)
            ->get();

        $bagianIds = $reportExercises->pluck('bagian_id')->unique();
        $subBagianIds = $reportExercises->pluck('sub_bagian_id')->unique();
        $categoryIds = $reportExercises->pluck('category_id')->unique();

        $bagians = Bagian::whereIn('id', $bagianIds)->get()->keyBy('id');
        $subBagians = SubBagian::whereIn('id', $subBagianIds)->get()->keyBy('id');
        $categories = Category::whereIn('id', $categoryIds)->get()->keyBy('id');

        $soals = Soal::whereIn('sub_bagian_id', $subBagianIds)
            ->where('paket_id', $paketId)
            ->get();

        $soalGroups = $soals->groupBy(function ($soal) {
            return $soal->sub_bagian_id . '-' . $soal->category_id;
        });

        $pilihanSoals = Pilihan::whereIn('soal_id', $soals->pluck('id'))->get()->groupBy('soal_id');

        $exercise = [];

        foreach ($reportExercises as $reportExercise) {
            $bagian = $bagians[$reportExercise->bagian_id] ?? null;
            $subBagian = $subBagians[$reportExercise->sub_bagian_id] ?? null;
            $category = $categories[$reportExercise->category_id] ?? null;

            if ($bagian && $subBagian && $category) {
                $exercise[] = [
                    'bagian' => $bagian,
                    'sub_bagian' => $subBagian,
                    'category' => $category,
                ];
            }
        }

        return response()->json(['exercise' => $exercise]);
    }


    public function startExercise(Request $request, $bagianId, $subBagianId, $category_id)
    {
        $user = $request->user();

        if ($user->role !== 'Remaja') {
            return response()->json([
                'status' => 'failed',
                'message' => 'Unauthorized access'
            ], 403);
        }

        $remaja = Remaja::where('user_id', $user->id)->first();

        if (!$remaja) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Remaja not found'
            ], 404);
        }

        $subBagian = SubBagian::find($subBagianId);
        if (!$subBagian) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Sub Bagian not found'
            ], 404);
        }


        $paketId = $remaja->paket_id;
        $activityId = $remaja->activity_id;

        $soals = Soal::where('sub_bagian_id', $subBagianId)
            ->where('paket_id', $paketId)
            ->where('category_id', $category_id)
            ->inRandomOrder()
            ->take(5)
            ->get();

        if ($activityId == $remaja->activity_id) {
            $soalExercise = [];
            foreach ($soals as $soal) {
                $pilihan = Pilihan::where('soal_id', $soal->id)->get();
                $soalData = [
                    'soal' => $soal,
                    'pilihan' => $pilihan
                ];
                array_push($soalExercise, $soalData);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Data berhasil didapatkan',
                'data' => [
                    'sub_bagian' => $subBagian,
                    'data_soal' => $soalExercise
                ]
            ]);
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'Activity mismatch'
            ], 400);
        }
    }

    public function getReportExercises(Request $request)
    {
        $user = $request->user();

        if ($user->role !== 'Remaja') {
            return response()->json([
                'status' => 'failed',
                'message' => 'Unauthorized access'
            ], 403);
        }

        $remaja = Remaja::where('user_id', $user->id)->first();

        if (!$remaja) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Remaja not found'
            ], 404);
        }

        $reportExercises = ReportExercise::where('remaja_id', $remaja->id)
            ->orderBy('bagian_id')
            ->orderBy('sub_bagian_id')
            ->orderBy('paket_id')
            ->orderBy('activity_id')
            ->orderBy('category_id')
            ->get();

        $reportExercises->transform(function ($reportExercise) {
            $reportExercise->nama_bagian = Bagian::where('id', $reportExercise->bagian_id)->value('nama_bagian');
            $reportExercise->nama_sub_bagian = SubBagian::where('id', $reportExercise->sub_bagian_id)->value('nama_sub_bagian');
            $reportExercise->nama_mapel = Category::where('id', $reportExercise->category_id)->value('nama_mapel');

            return $reportExercise;
        });

        return response()->json([
            'status' => 'success',
            'data' => $reportExercises
        ]);
    }



    public function submitExercise(Request $request, $bagianId, $subBagianId, $category_id)
    {

        $request->validate([
            'soal_id' => 'required|array',
            'jawaban' => 'required|array',
        ]);

        $user = $request->user();

        if ($user->role !== 'Remaja') {
            return response()->json([
                'status' => 'failed',
                'message' => 'Unauthorized access'
            ], 403);
        }

        $remaja = Remaja::where('user_id', $user->id)->first();

        if (!$remaja) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Remaja not found'
            ], 404);
        }

        $soalIds = $request->input('soal_id');
        $jawaban = $request->input('jawaban');

        $totalNilai = 0;
        foreach ($soalIds as $index => $soalId) {
            $jawabanRemaja = $jawaban[$index];
            $pilihanBenar = Pilihan::where('soal_id', $soalId)->where('benar', true)->first();

            if ($jawabanRemaja == $pilihanBenar->id) {
                $totalNilai += $pilihanBenar->skor;
            }
        }

        $isCompleted = $totalNilai >= 100;


        $report = ReportExercise::where('remaja_id', $remaja->id)
            ->where('bagian_id', $bagianId)
            ->where('sub_bagian_id', $subBagianId)
            ->where('category_id', $category_id)
            ->first();

        if ($report) {
            $report->nilai = $totalNilai;
            $report->completed = $isCompleted;
            $remaja->exp += $totalNilai;
            $remaja->save();
            $report->save();
        } else {
            $report = new ReportExercise();
            $report->remaja_id = $remaja->id;
            $report->bagian_id = $bagianId;
            $report->sub_bagian_id = $subBagianId;
            $report->category_id = $category_id;
            $report->nilai = $totalNilai;
            $report->completed = true;
            $report->save();
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Exercise submitted successfully',
            'nilai' => $totalNilai
        ]);
    }
}
