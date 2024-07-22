<?php

namespace Database\Seeders;

use App\Models\Remaja;
use App\Models\User;
use App\Models\Activity;
use App\Models\Paket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RemajaAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Remaja',
            'email' => 'remaja@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role' => 'remaja',
            'foto' => 'remaja.jpg',
        ]);

        $activity = Activity::where('activity', 'pkbm')->first();
        $paket = Paket::where('paket', 'a')->first();

        Remaja::create([
            'nama_orang_tua' => 'Orang Tua',
            'user_id' => 3,
            'username' => 'remaja123',
            'activity_id' => $activity->id,
            'paket_id' => $paket->id,
        ]);
    }
}
