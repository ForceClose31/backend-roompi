<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Remaja;
use App\Models\Activity;
use App\Models\PaketKesetaraan;
use App\Models\Bagian;
use App\Models\Paket;
use App\Models\SubBagian;
use App\Models\ReportExercise;
use App\Models\Soal;
use Illuminate\Support\Facades\Hash;

class RemajaAccountSeeder extends Seeder
{
    public function run()
    {
        $activity = Activity::firstOrCreate(['activity' => 'pkbm']);

        $paket = Paket::firstOrCreate(['paket' => 'C']);

        $user = User::create([
            'name' => 'Remaja User',
            'email' => 'remaja2@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'Remaja',
        ]);

        $remaja = Remaja::create([
            'user_id' => $user->id,
            'username' => 'remajauser',
            'exp' => 0,
            'star' => 0,
            'level' => 0,
            'activity_id' => $activity->id,
            'paket_id' => $paket->id,
        ]);

        if ($activity->activity === 'pkbm' && in_array($paket->paket, ['A', 'B', 'C'])) {
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

        echo "Remaja user created successfully.\n";
    }
}
