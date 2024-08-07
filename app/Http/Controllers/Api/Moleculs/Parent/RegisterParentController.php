<?php

namespace App\Http\Controllers\Api\Moleculs\Parent;

use App\Http\Controllers\Controller;
use App\Models\Parents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterParentController extends Controller
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
            'role' => 'Parent',
        ]);

        if ($user) {
            $kode = $this->generateKodeOrangTua();
            $parent = Parents::create([
                'user_id' => $user->id,
                'nama_lengkap' => $request->nama_lengkap,
                'kode' => $kode,
            ]);

            $token = $user->createToken('mobile', ['role:Parent'])->plainTextToken;
            if ($parent) {
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

    private function generateKodeOrangTua()
    {
        $now = new \DateTime();
        return 'OT' . $now->format('YmdHis');
    }
}
