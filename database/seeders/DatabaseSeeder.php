<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(ParentAccountSeeder::class);
        $this->call(MentorAccountSeeder::class);
        $this->call(ActivitySeeder::class);
        $this->call(PaketSeeder::class);
        $this->call(SoalPaketASeeder::class);
        $this->call(SoalPaketBSeeder::class);
        $this->call(SoalPaketCSeeder::class);
        $this->call(RemajaAccountSeeder::class);
    }
}
