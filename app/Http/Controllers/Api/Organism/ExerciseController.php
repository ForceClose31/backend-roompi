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

        $reportExercises = ReportExercise::with(['bagian', 'subBagian', 'category'])
        ->where('remaja_id', $remaja->id)
            ->where('activity_id', $activityId)
            ->where('paket_id', $paketId)
            ->get();

        $uniqueExercises = $reportExercises->unique(function ($item) {
            return $item->bagian_id . '-' . $item->sub_bagian_id . '-' . $item->category_id;
        });

        $exercise = $uniqueExercises->map(function ($reportExercise) {
            return [
                'bagian' => $reportExercise->bagian,
                'sub_bagian' => $reportExercise->subBagian,
                'category' => $reportExercise->category,
            ];
        });

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

        $reportExercises = ReportExercise::with([
            'bagian:id,nama_bagian',
            'subBagian:id,nama_sub_bagian',
            'category:id,nama_mapel'
        ])
        ->where('remaja_id', $remaja->id)
        ->orderBy('category_id')
        ->orderBy('bagian_id')
        ->orderBy('sub_bagian_id')
        ->orderBy('paket_id')
        ->orderBy('activity_id')
        ->get()
        ->groupBy(['category_id', 'bagian_id', 'sub_bagian_id']);

        $response = [];
        foreach ($reportExercises as $categoryId => $bagians) {
            $categoryName = $bagians->first()->first()->first()->category->nama_mapel;

            $bagianData = [];

            foreach ($bagians as $bagianId => $subBagians) {
                $bagianName = $subBagians->first()->first()->bagian->nama_bagian;

                $subBagianData = [];

                foreach ($subBagians as $subBagianId => $exercises) {
                    $subBagianName = $exercises->first()->subBagian->nama_sub_bagian;

                    $subBagianData[] = [
                        'sub_bagian_id' => $subBagianId,
                        'nama_sub_bagian' => $subBagianName,
                        'nilai' => $exercises->first()->nilai,
                        'completed' => $exercises->first()->completed,
                        'created_at' => $exercises->first()->created_at,
                        'updated_at' => $exercises->first()->updated_at,
                    ];
                }

                $bagianData[] = [
                    'bagian_id' => $bagianId,
                    'nama_bagian' => $bagianName,
                    'data_sub_bagian' => $subBagianData,
                ];
            }

            $response[] = [
                'category_id' => $categoryId,
                'nama_mapel' => $categoryName,
                'data_bagian' => $bagianData,
            ];
        }

        return response()->json([
            'status' => 'p',
            'data' => $response
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

        $reports = ReportExercise::where('remaja_id', $remaja->id)
            ->where('bagian_id', $bagianId)
            ->where('sub_bagian_id', $subBagianId)
            ->where('category_id', $category_id)
            ->get();

        if ($reports->isNotEmpty()) {
            foreach ($reports as $report) {
                $report->nilai = $totalNilai;
                $report->completed = $isCompleted;
                $remaja->exp += $totalNilai;
                $remaja->save();
                $report->save();
            }
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
            'nilai' => $totalNilai,
            'completed' => $isCompleted
        ]);
    }

}
