<?php

namespace App\Http\Controllers\Api\Moleculs\Mentor;

use App\Http\Controllers\Controller;
use App\Models\Mentor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterMentorController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|same:konfirmasi_password',
            'konfirmasi_password' => 'required|string|min:8|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Mentor',
        ]);

        if ($user) {
            $mentor = Mentor::create([
                'user_id' => $user->id,
                'nama_lengkap' => $user->name,
                'gelar' => $request->gelar,
                'riwayat_pendidikan_terakhir' => $request->riwayat_pendidikan_terakhir,
            ]);

            $token = $user->createToken('mobile', ['role:Mentor'])->plainTextToken;
            if ($mentor) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Berhasil registrasi',
                    'token' => $token,
                    'data' => $user,
                ]);
            }
        }
        return response()->json(['status' => 'error', 'message' => 'Gagal registrasi'], 500);

    }
}
