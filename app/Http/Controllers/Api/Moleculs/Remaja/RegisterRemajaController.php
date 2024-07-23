<?php

namespace App\Http\Controllers\Api\Moleculs\Remaja;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Bagian;
use App\Models\Paket;
use App\Models\Remaja;
use App\Models\ReportExercise;
use App\Models\Soal;
use App\Models\SubBagian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\error;

class RegisterRemajaController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|same:konfirmasi_password',
            'konfirmasi_password' => 'required|string|min:8|same:password',
            'role' => 'required|in:Remaja,Parent,Mentor',
            'activity_id' => 'required|exists:activity,id',
            'paket_id' => 'nullable|exists:paket_kesetaraan,id',
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        if ($user) {
            $remaja = Remaja::create([
                'user_id' => $user->id,
                'username' => $request->username,
                'exp' => 0,
                'star' => 0,
                'level' => 0,
                'activity_id' => $request->activity_id,
                'paket_id' => $request->paket_id,
            ]);
            $token = $user->createToken('mobile', ['role:Remaja'])->plainTextToken;

            $activity = Activity::find($request->activity_id);
            $paket = Paket::find($request->paket_id);
            if ($activity->id === 2 && in_array($paket->id, [1, 2, 3])) {
                $bagian_ids = Bagian::all();
                foreach ($bagian_ids as $bagian) {
                    $sub_bagian_ids = SubBagian::where('bagian_id', $bagian->id)->get();
                    foreach ($sub_bagian_ids as $sub_bagian) {
                        $soals = Soal::where('sub_bagian_id', $sub_bagian->id)
                            ->where('paket_id', $paket->id)
                            ->get();
                        foreach ($soals as $soal) {
                            ReportExercise::create([
                                'remaja_id' => $remaja->id,
                                'bagian_id' => $bagian->id,
                                'sub_bagian_id' => $sub_bagian->id,
                                'activity_id' => $activity->id,
                                'paket_id' => $paket->id,
                                'category_id' => $soal->category_id,
                                'nilai' => 0,
                                'completed' => 0,
                            ]);
                        }
                    }
                }
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil registrasi',
                'token' => $token,
                'data' => $user,
            ]);
        }
    }
}
