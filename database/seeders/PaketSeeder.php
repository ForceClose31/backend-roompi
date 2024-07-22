<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pakets = [
            ['paket' => 'A'],
            ['paket' => 'B'],
            ['paket' => 'C'],
            ['paket' => 'D'],
        ];

        foreach ($pakets as $paket) {
            \App\Models\Paket::create($paket);
        }
    }
}
