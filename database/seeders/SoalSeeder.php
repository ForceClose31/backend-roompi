<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            ['nama_mapel' => 'Matematika'],
            ['nama_mapel' => 'PPKN'],
            ['nama_mapel' => 'PAI'],
            ['nama_mapel' => 'Sejarah'],
            ['nama_mapel' => 'Bahasa'],
        ]);

        DB::table('bagian')->insert([
            ['nama_bagian' => 'Mudah'],
            ['nama_bagian' => 'Standart'],
            ['nama_bagian' => 'Sedang'],
            ['nama_bagian' => 'Susah'],
        ]);

        DB::table('sub_bagian')->insert([

            /**
             *Level 1
             */

            // Sub bagian 1
            ['nama_sub_bagian' => 'Level 1', 'nilai_maks' => 100, 'bagian_id' => 1],
            // Sub bagian 2
            ['nama_sub_bagian' => 'Level 2', 'nilai_maks' => 100, 'bagian_id' => 1],
            // Sub bagian 3
            ['nama_sub_bagian' => 'Level 3', 'nilai_maks' => 100, 'bagian_id' => 1],
            // Sub bagian 4
            ['nama_sub_bagian' => 'Level 4', 'nilai_maks' => 100, 'bagian_id' => 1],

            /**
             *Level 2
             */

            // Sub bagian 5
            ['nama_sub_bagian' => 'Level 1', 'nilai_maks' => 100, 'bagian_id' => 2],
            // Sub bagian 6
            ['nama_sub_bagian' => 'Level 2', 'nilai_maks' => 100, 'bagian_id' => 2],
            // Sub bagian 7
            ['nama_sub_bagian' => 'Level 3', 'nilai_maks' => 100, 'bagian_id' => 2],
            // Sub bagian 8
            ['nama_sub_bagian' => 'Level 4', 'nilai_maks' => 100, 'bagian_id' => 2],

            /**
             *Level 3
             */

            // Sub bagian 9
            ['nama_sub_bagian' => 'Level 1', 'nilai_maks' => 100, 'bagian_id' => 3],
            // Sub bagian 10
            ['nama_sub_bagian' => 'Level 2', 'nilai_maks' => 100, 'bagian_id' => 3],
            // Sub bagian 11
            ['nama_sub_bagian' => 'Level 3', 'nilai_maks' => 100, 'bagian_id' => 3],
            // Sub bagian 12
            ['nama_sub_bagian' => 'Level 4', 'nilai_maks' => 100, 'bagian_id' => 3],

            /**
             *Level 4
             */

            // Sub bagian 13
            ['nama_sub_bagian' => 'Level 1', 'nilai_maks' => 100, 'bagian_id' => 4],
            // Sub bagian 14
            ['nama_sub_bagian' => 'Level 2', 'nilai_maks' => 100, 'bagian_id' => 4],
            // Sub bagian 15
            ['nama_sub_bagian' => 'Level 3', 'nilai_maks' => 100, 'bagian_id' => 4],
            // Sub bagian 16
            ['nama_sub_bagian' => 'Level 4', 'nilai_maks' => 100, 'bagian_id' => 4],
        ]);

        // Mapel Matematika
        $soalBagian1Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 1, 'paket_id' => 3],
        ];

        $soalBagian1Level2 = [
            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 7
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 8
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 9
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 10
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 1, 'paket_id' => 3],
        ];

        $soalBagian1Level3 = [
            // Pertanyaan 11
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 12
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 13
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 14
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 15
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 1, 'paket_id' => 3],
        ];

        $soalBagian1Level4 = [
            // Pertanyaan 16
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 17
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 18
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 19
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 20
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 1, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian1Level1, $soalBagian1Level2, $soalBagian1Level3, $soalBagian1Level4));

        $pilihanBagian1Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 1],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 1],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 1],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 1],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 2],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 2],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 2],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 2],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 3],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 3],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 3],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 3],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 4],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 4],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 4],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 4],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 5],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 5],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 5],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 5],
        ];
        
        $pilihanBagian1Level2 = [
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 6],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 6],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 6],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 6],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 7],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 7],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 7],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 7],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 8],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 8],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 8],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 8],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 9],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 9],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 9],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 9],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 10],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 10],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 10],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 10],
        ];
        
        $pilihanBagian1Level3 = [
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 11],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 11],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 11],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 11],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 12],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 12],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 12],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 12],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 13],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 13],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 13],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 13],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 14],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 14],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 14],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 14],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 15],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 15],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 15],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 15],
        ];
        
        $pilihanBagian1Level4 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 16],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 16],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 16],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 16],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 17],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 17],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 17],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 17],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 18],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 18],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 18],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 18],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 19],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 19],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 19],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 19],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 20],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 20],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 20],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 20],
        ];
        
        DB::table('pilihan')->insert(array_merge($pilihanBagian1Level1, $pilihanBagian1Level2, $pilihanBagian1Level3, $pilihanBagian1Level4));
        
        $soalBagian2Level1 = [

            // Pertanyaan 21
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 22
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 23
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 24
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 25
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 1, 'paket_id' => 3],
        ];

        $soalBagian2Level2 = [
            // Pertanyaan 26
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 27
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 28
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 29
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 30
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 1, 'paket_id' => 3],
        ];

        $soalBagian2Level3 = [
            // Pertanyaan 31
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 32
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 33
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 34
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 35
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 1, 'paket_id' => 3],
        ];

        $soalBagian2Level4 = [
            // Pertanyaan 36
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 37
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 38
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 39
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 40
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 1, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian2Level1, $soalBagian2Level2, $soalBagian2Level3, $soalBagian2Level4));

        $pilihanBagian2Level1 = [
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 21],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 21],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 21],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 21],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 22],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 22],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 22],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 22],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 23],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 23],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 23],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 23],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 24],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 24],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 24],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 24],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 25],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 25],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 25],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 25],
        ];
        
        $pilihanBagian2Level2 = [
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 26],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 26],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 26],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 26],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 27],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 27],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 27],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 27],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 28],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 28],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 28],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 28],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 29],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 29],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 29],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 29],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 30],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 30],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 30],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 30],
        ];
        
        $pilihanBagian2Level3 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 31],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 31],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 31],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 31],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 32],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 32],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 32],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 32],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 33],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 33],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 33],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 33],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 34],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 34],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 34],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 34],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 35],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 35],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 35],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 35],
        ];
        
        $pilihanBagian2Level4 = [
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 36],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 36],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 36],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 36],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 37],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 37],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 37],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 37],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 38],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 38],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 38],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 38],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 39],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 39],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 39],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 39],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 40],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 40],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 40],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 40],
        ];



        DB::table('pilihan')->insert(array_merge($pilihanBagian2Level1, $pilihanBagian2Level2, $pilihanBagian2Level3, $pilihanBagian2Level4));


        $soalBagian3Level1 = [
            // Pertanyaan 41
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 42
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 43
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 44
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 45
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 1, 'paket_id' => 3],
        ];

        $soalBagian3Level2 = [
            // Pertanyaan 46
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 47
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 48
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 49
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 50
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 1, 'paket_id' => 3],
        ];

        $soalBagian3Level3 = [
            // Pertanyaan 51
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 52
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 53
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 54
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 55
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 1, 'paket_id' => 3],
        ];

        $soalBagian3Level4 = [
            // Pertanyaan 56
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 57
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 58
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 59
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 60
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 1, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian3Level1, $soalBagian3Level2, $soalBagian3Level3, $soalBagian3Level4));

        $pilihanBagian3Level1 = [
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 41],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 41],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 41],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 41],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 42],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 42],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 42],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 42],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 43],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 43],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 43],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 43],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 44],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 44],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 44],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 44],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 45],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 45],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 45],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 45],
        ];
        
        $pilihanBagian3Level2 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 46],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 46],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 46],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 46],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 47],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 47],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 47],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 47],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 48],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 48],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 48],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 48],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 49],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 49],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 49],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 49],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 50],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 50],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 50],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 50],
        ];
        
        $pilihanBagian3Level3 = [
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 51],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 51],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 51],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 51],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 52],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 52],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 52],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 52],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 53],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 53],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 53],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 53],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 54],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 54],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 54],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 54],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 55],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 55],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 55],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 55],
        ];
        
        $pilihanBagian3Level4 = [
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 56],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 56],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 56],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 56],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 57],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 57],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 57],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 57],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 58],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 58],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 58],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 58],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 59],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 59],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 59],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 59],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 60],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 60],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 60],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 60],
        ];
        
        DB::table('pilihan')->insert(array_merge($pilihanBagian3Level1, $pilihanBagian3Level2, $pilihanBagian3Level3, $pilihanBagian3Level4));
        
        
        $soalBagian4Level1 = [
            // Pertanyaan 61
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 62
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 63
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 64
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 65
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 1, 'paket_id' => 3],
        ];

        $soalBagian4Level2 = [
            // Pertanyaan 66
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 67
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 68
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 69
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 1, 'paket_id' => 3],

            // Pertanyaan 70
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 1, 'paket_id' => 3],
        ];

        $soalBagian4Level3 = [
            // Pertanyaan 71
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 1, 'paket_id' => 3],
            
            // Pertanyaan 72
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 1, 'paket_id' => 3],
            
            // Pertanyaan 73
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 1, 'paket_id' => 3],
            
            // Pertanyaan 74
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 1, 'paket_id' => 3],
            
            // Pertanyaan 75
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 1, 'paket_id' => 3],
        ];

        $soalBagian4Level4 = [
            // Pertanyaan 76
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 1, 'paket_id' => 3],
            
            // Pertanyaan 77
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 1, 'paket_id' => 3],
            
            // Pertanyaan 78
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 1, 'paket_id' => 3],
            
            // Pertanyaan 79
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 1, 'paket_id' => 3],
            
            // Pertanyaan 80
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 1, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian4Level1, $soalBagian4Level2, $soalBagian4Level3, $soalBagian4Level4));

        $pilihanBagian4Level1 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 61],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 61],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 61],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 61],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 62],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 62],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 62],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 62],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 63],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 63],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 63],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 63],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 64],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 64],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 64],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 64],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 65],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 65],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 65],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 65],
        ];
        
        $pilihanBagian4Level2 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 66],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 66],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 66],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 66],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 67],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 67],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 67],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 67],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 68],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 68],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 68],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 68],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 69],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 69],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 69],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 69],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 70],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 70],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 70],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 70],
        ];
        
        $pilihanBagian4Level3 = [
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 71],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 71],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 71],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 71],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 72],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 72],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 72],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 72],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 73],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 73],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 73],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 73],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 74],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 74],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 74],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 74],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 75],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 75],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 75],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 75],
        ];
        
        $pilihanBagian4Level4 = [
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 76],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 76],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 76],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 76],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 77],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 77],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 77],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 77],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 78],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 78],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 78],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 78],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 79],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 79],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 79],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 79],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 80],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 80],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 80],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 80],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian4Level1, $pilihanBagian4Level2, $pilihanBagian4Level3, $pilihanBagian4Level4));

        // Mapel PPKN
        $soalBagian1Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 2, 'paket_id' => 3],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 2, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 2, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 2, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 2, 'paket_id' => 3],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 2, 'paket_id' => 3],
        ];

        $soalBagian1Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 2, 'paket_id' => 3],
        ];

        $soalBagian1Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 2, 'paket_id' => 3],
        ];

        $soalBagian1Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 2, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian1Level1, $soalBagian1Level2, $soalBagian1Level3, $soalBagian1Level4));

        $pilihanBagian1Level1 = [
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 81],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 81],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 81],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 81],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 82],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 82],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 82],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 82],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 83],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 83],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 83],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 83],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 84],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 84],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 84],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 84],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 85],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 85],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 85],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 85],
        ];
        
        $pilihanBagian1Level2 = [
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 86],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 86],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 86],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 86],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 87],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 87],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 87],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 87],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 88],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 88],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 88],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 88],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 89],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 89],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 89],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 89],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 90],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 90],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 90],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 90],
        ];
        
        $pilihanBagian1Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 91],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 91],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 91],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 91],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 92],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 92],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 92],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 92],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 93],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 93],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 93],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 93],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 94],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 94],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 94],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 94],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 95],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 95],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 95],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 95],
        ];
        
        $pilihanBagian1Level4 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 96],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 96],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 96],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 96],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 97],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 97],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 97],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 97],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 98],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 98],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 98],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 98],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 99],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 99],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 99],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 99],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 100],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 100],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 100],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 100],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian1Level1, $pilihanBagian1Level2, $pilihanBagian1Level3, $pilihanBagian1Level4));

        $soalBagian2Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 2, 'paket_id' => 3],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 2, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 2, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 2, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 2, 'paket_id' => 3],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 2, 'paket_id' => 3],
        ];

        $soalBagian2Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 2, 'paket_id' => 3],
        ];

        $soalBagian2Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 2, 'paket_id' => 3],
        ];

        $soalBagian2Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 2, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian2Level1, $soalBagian2Level2, $soalBagian2Level3, $soalBagian2Level4));

        $pilihanBagian2Level1 = [
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 101],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 101],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 101],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 101],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 102],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 102],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 102],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 102],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 103],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 103],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 103],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 103],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 104],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 104],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 104],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 104],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 105],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 105],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 105],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 105],
        ];
        
        $pilihanBagian2Level2 = [
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 106],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 106],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 106],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 106],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 107],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 107],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 107],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 107],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 108],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 108],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 108],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 108],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 109],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 109],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 109],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 109],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 110],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 110],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 110],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 110],
        ];
        
        $pilihanBagian2Level3 = [
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 111],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 111],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 111],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 111],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 112],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 112],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 112],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 112],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 113],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 113],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 113],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 113],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 114],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 114],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 114],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 114],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 115],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 115],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 115],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 115],
        ];
        
        $pilihanBagian2Level4 = [
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 116],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 116],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 116],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 116],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 117],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 117],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 117],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 117],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 118],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 118],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 118],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 118],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 119],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 119],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 119],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 119],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 120],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 120],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 120],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 120],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian2Level1, $pilihanBagian2Level2, $pilihanBagian2Level3, $pilihanBagian2Level4));


        $soalBagian3Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 2, 'paket_id' => 3],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 2, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 2, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 2, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 2, 'paket_id' => 3],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 2, 'paket_id' => 3],
        ];

        $soalBagian3Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 2, 'paket_id' => 3],
        ];

        $soalBagian3Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 2, 'paket_id' => 3],
        ];

        $soalBagian3Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 2, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian3Level1, $soalBagian3Level2, $soalBagian3Level3, $soalBagian3Level4));

        $pilihanBagian3Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 121],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 121],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 121],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 121],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 122],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 122],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 122],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 122],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 123],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 123],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 123],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 123],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 124],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 124],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 124],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 124],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 125],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 125],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 125],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 125],
        ];
        
        $pilihanBagian3Level2 = [
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 126],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 126],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 126],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 126],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 127],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 127],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 127],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 127],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 128],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 128],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 128],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 128],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 129],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 129],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 129],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 129],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 130],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 130],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 130],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 130],
        ];
        
        $pilihanBagian3Level3 = [
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 131],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 131],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 131],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 131],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 132],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 132],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 132],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 132],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 133],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 133],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 133],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 133],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 134],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 134],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 134],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 134],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 135],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 135],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 135],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 135],
        ];
        
        $pilihanBagian3Level4 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 136],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 136],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 136],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 136],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 137],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 137],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 137],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 137],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 138],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 138],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 138],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 138],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 139],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 139],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 139],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 139],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 140],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 140],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 140],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 140],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian3Level1, $pilihanBagian3Level2, $pilihanBagian3Level3, $pilihanBagian3Level4));


        $soalBagian4Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 2, 'paket_id' => 3],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 2, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 2, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 2, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 2, 'paket_id' => 3],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 2, 'paket_id' => 3],
        ];

        $soalBagian4Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 2, 'paket_id' => 3],
        ];

        $soalBagian4Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 2, 'paket_id' => 3],
        ];

        $soalBagian4Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 2, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 2, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian4Level1, $soalBagian4Level2, $soalBagian4Level3, $soalBagian4Level4));

        $pilihanBagian4Level1 = [
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 141],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 141],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 141],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 141],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 142],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 142],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 142],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 142],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 143],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 143],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 143],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 143],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 144],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 144],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 144],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 144],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 145],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 145],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 145],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 145],
        ];

        $pilihanBagian4Level2 = [
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 146],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 146],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 146],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 146],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 147],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 147],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 147],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 147],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 148],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 148],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 148],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 148],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 149],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 149],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 149],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 149],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 150],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 150],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 150],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 150],
        ];
        
        $pilihanBagian4Level3 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 151],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 151],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 151],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 151],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 152],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 152],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 152],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 152],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 153],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 153],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 153],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 153],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 154],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 154],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 154],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 154],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 155],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 155],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 155],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 155],
        ];
        
        $pilihanBagian4Level4 = [
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 156],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 156],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 156],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 156],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 157],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 157],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 157],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 157],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 158],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 158],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 158],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 158],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 159],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 159],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 159],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 159],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 160],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 160],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 160],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 160],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian4Level1, $pilihanBagian4Level2, $pilihanBagian4Level3, $pilihanBagian4Level4));

        // Mapel PAI
        $soalBagian1Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 3, 'paket_id' => 3],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 3, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 3, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 3, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 3, 'paket_id' => 3],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 3, 'paket_id' => 3],
        ];

        $soalBagian1Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 3, 'paket_id' => 3],
        ];

        $soalBagian1Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 3, 'paket_id' => 3],
        ];

        $soalBagian1Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 3, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian1Level1, $soalBagian1Level2, $soalBagian1Level3, $soalBagian1Level4));

        $pilihanBagian1Level1 = [
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 161],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 161],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 161],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 161],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 162],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 162],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 162],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 162],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 163],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 163],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 163],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 163],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 164],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 164],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 164],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 164],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 165],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 165],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 165],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 165],
        ];

        $pilihanBagian1Level2 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 166],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 166],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 166],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 166],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 167],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 167],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 167],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 167],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 168],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 168],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 168],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 168],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 169],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 169],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 169],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 169],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 170],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 170],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 170],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 170],
        ];
        
        $pilihanBagian1Level3 = [
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 171],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 171],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 171],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 171],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 172],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 172],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 172],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 172],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 173],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 173],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 173],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 173],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 174],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 174],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 174],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 174],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 175],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 175],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 175],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 175],
        ];
        
        $pilihanBagian1Level4 = [
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 176],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 176],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 176],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 176],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 177],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 177],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 177],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 177],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 178],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 178],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 178],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 178],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 179],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 179],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 179],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 179],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 180],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 180],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 180],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 180],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian1Level1, $pilihanBagian1Level2, $pilihanBagian1Level3, $pilihanBagian1Level4));

        $soalBagian2Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 3, 'paket_id' => 3],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 3, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 3, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 3, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 3, 'paket_id' => 3],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 3, 'paket_id' => 3],
        ];

        $soalBagian2Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 3, 'paket_id' => 3],
        ];

        $soalBagian2Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 3, 'paket_id' => 3],
        ];

        $soalBagian2Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 3, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian2Level1, $soalBagian2Level2, $soalBagian2Level3, $soalBagian2Level4));

        $pilihanBagian2Level1 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 181],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 181],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 181],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 181],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 182],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 182],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 182],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 182],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 183],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 183],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 183],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 183],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 184],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 184],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 184],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 184],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 185],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 185],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 185],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 185],
        ];

        $pilihanBagian2Level2 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 186],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 186],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 186],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 186],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 187],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 187],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 187],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 187],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 188],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 188],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 188],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 188],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 189],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 189],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 189],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 189],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 190],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 190],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 190],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 190],
        ];
        
        $pilihanBagian2Level3 = [
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 191],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 191],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 191],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 191],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 192],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 192],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 192],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 192],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 193],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 193],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 193],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 193],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 194],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 194],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 194],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 194],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 195],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 195],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 195],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 195],
        ];
        
        $pilihanBagian2Level4 = [
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 196],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 196],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 196],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 196],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 197],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 197],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 197],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 197],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 198],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 198],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 198],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 198],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 199],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 199],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 199],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 199],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 200],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 200],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 200],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 200],
        ];



        DB::table('pilihan')->insert(array_merge($pilihanBagian2Level1, $pilihanBagian2Level2, $pilihanBagian2Level3, $pilihanBagian2Level4));


        $soalBagian3Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 3, 'paket_id' => 3],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 3, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 3, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 3, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 3, 'paket_id' => 3],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 3, 'paket_id' => 3],
        ];

        $soalBagian3Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 3, 'paket_id' => 3],
        ];

        $soalBagian3Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 3, 'paket_id' => 3],
        ];

        $soalBagian3Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 3, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian3Level1, $soalBagian3Level2, $soalBagian3Level3, $soalBagian3Level4));

        $pilihanBagian3Level1 = [
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 201],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 201],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 201],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 201],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 202],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 202],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 202],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 202],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 203],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 203],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 203],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 203],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 204],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 204],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 204],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 204],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 205],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 205],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 205],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 205],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 206],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 206],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 206],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 206],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 207],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 207],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 207],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 207],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 208],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 208],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 208],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 208],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 209],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 209],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 209],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 209],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 210],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 210],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 210],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 210],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 211],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 211],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 211],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 211],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 212],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 212],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 212],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 212],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 213],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 213],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 213],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 213],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 214],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 214],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 214],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 214],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 215],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 215],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 215],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 215],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 216],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 216],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 216],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 216],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 217],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 217],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 217],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 217],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 218],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 218],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 218],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 218],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 219],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 219],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 219],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 219],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 220],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 220],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 220],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 220],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 221],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 221],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 221],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 221],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 222],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 222],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 222],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 222],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 223],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 223],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 223],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 223],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 224],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 224],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 224],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 224],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 225],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 225],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 225],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 225],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 226],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 226],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 226],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 226],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 227],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 227],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 227],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 227],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 228],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 228],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 228],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 228],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 229],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 229],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 229],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 229],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 230],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 230],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 230],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 230],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 231],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 231],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 231],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 231],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 232],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 232],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 232],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 232],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 233],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 233],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 233],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 233],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 234],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 234],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 234],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 234],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 235],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 235],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 235],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 235],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 236],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 236],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 236],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 236],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 237],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 237],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 237],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 237],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 238],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 238],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 238],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 238],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 239],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 239],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 239],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 239],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 240],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 240],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 240],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 240],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 241],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 241],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 241],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 241],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 242],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 242],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 242],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 242],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 243],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 243],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 243],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 243],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 244],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 244],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 244],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 244],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 245],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 245],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 245],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 245],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 246],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 246],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 246],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 246],
        ];

        $pilihanBagian3Level2 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 247],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 247],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 247],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 247],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 248],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 248],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 248],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 248],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 249],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 249],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 249],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 249],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 250],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 250],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 250],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 250],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 251],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 251],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 251],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 251],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 252],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 252],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 252],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 252],
        ];

        $pilihanBagian3Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 253],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 253],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 253],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 253],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 254],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 254],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 254],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 254],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 255],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 255],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 255],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 255],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 256],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 256],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 256],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 256],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 257],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 257],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 257],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 257],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 258],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 258],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 258],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 258],
        ];

        $pilihanBagian3Level4 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 259],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 259],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 259],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 259],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 260],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 260],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 260],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 260],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 261],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 261],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 261],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 261],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 262],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 262],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 262],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 262],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 263],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 263],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 263],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 263],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 264],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 264],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 264],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 264],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian3Level1, $pilihanBagian3Level2, $pilihanBagian3Level3, $pilihanBagian3Level4));


        $soalBagian4Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 3, 'paket_id' => 3],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 3, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 3, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 3, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 3, 'paket_id' => 3],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 3, 'paket_id' => 3],
        ];

        $soalBagian4Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 3, 'paket_id' => 3],
        ];

        $soalBagian4Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 3, 'paket_id' => 3],
        ];

        $soalBagian4Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 3, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 3, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian4Level1, $soalBagian4Level2, $soalBagian4Level3, $soalBagian4Level4));

        $pilihanBagian4Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 265],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 265],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 265],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 265],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 266],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 266],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 266],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 266],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 267],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 267],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 267],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 267],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 268],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 268],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 268],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 268],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 269],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 269],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 269],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 269],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 270],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 270],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 270],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 270],
        ];

        $pilihanBagian4Level2 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 271],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 271],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 271],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 271],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 272],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 272],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 272],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 272],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 273],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 273],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 273],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 273],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 274],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 274],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 274],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 274],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 275],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 275],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 275],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 275],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 276],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 276],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 276],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 276],
        ];

        $pilihanBagian4Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 277],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 277],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 277],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 277],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 278],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 278],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 278],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 278],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 279],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 279],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 279],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 279],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 280],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 280],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 280],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 280],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 281],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 281],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 281],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 281],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 282],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 282],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 282],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 282],
        ];

        $pilihanBagian4Level4 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 283],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 283],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 283],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 283],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 284],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 284],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 284],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 284],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 285],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 285],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 285],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 285],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 286],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 286],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 286],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 286],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 287],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 287],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 287],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 287],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 288],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 288],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 288],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 288],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian4Level1, $pilihanBagian4Level2, $pilihanBagian4Level3, $pilihanBagian4Level4));


        // Mapel Sejarah
        $soalBagian1Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 4, 'paket_id' => 3],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 4, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 4, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 4, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 4, 'paket_id' => 3],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 4, 'paket_id' => 3],
        ];

        $soalBagian1Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 4, 'paket_id' => 3],
        ];

        $soalBagian1Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 4, 'paket_id' => 3],
        ];

        $soalBagian1Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 4, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian1Level1, $soalBagian1Level2, $soalBagian1Level3, $soalBagian1Level4));

        $pilihanBagian1Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 289],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 289],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 289],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 289],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 290],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 290],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 290],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 290],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 291],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 291],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 291],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 291],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 292],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 292],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 292],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 292],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 293],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 293],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 293],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 293],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 294],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 294],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 294],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 294],
        ];

        $pilihanBagian1Level2 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 295],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 295],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 295],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 295],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 296],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 296],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 296],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 296],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 297],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 297],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 297],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 297],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 298],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 298],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 298],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 298],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 299],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 299],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 299],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 299],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 300],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 300],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 300],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 300],
        ];

        $pilihanBagian1Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 301],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 301],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 301],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 301],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 302],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 302],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 302],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 302],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 303],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 303],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 303],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 303],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 304],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 304],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 304],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 304],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 305],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 305],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 305],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 305],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 306],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 306],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 306],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 306],
        ];

        $pilihanBagian1Level4 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 307],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 307],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 307],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 307],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 308],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 308],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 308],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 308],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 309],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 309],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 309],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 309],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 310],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 310],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 310],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 310],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 311],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 311],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 311],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 311],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 312],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 312],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 312],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 312],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian1Level1, $pilihanBagian1Level2, $pilihanBagian1Level3, $pilihanBagian1Level4));

        $soalBagian2Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 4, 'paket_id' => 3],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 4, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 4, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 4, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 4, 'paket_id' => 3],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 4, 'paket_id' => 3],
        ];

        $soalBagian2Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 4, 'paket_id' => 3],
        ];

        $soalBagian2Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 4, 'paket_id' => 3],
        ];

        $soalBagian2Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 4, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian2Level1, $soalBagian2Level2, $soalBagian2Level3, $soalBagian2Level4));

        $pilihanBagian2Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 313],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 313],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 313],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 313],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 314],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 314],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 314],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 314],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 315],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 315],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 315],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 315],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 316],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 316],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 316],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 316],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 317],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 317],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 317],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 317],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 318],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 318],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 318],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 318],
        ];

        $pilihanBagian2Level2 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 319],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 319],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 319],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 319],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 320],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 320],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 320],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 320],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 321],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 321],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 321],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 321],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 322],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 322],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 322],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 322],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 323],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 323],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 323],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 323],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 324],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 324],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 324],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 324],
        ];

        $pilihanBagian2Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 325],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 325],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 325],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 325],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 326],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 326],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 326],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 326],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 327],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 327],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 327],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 327],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 328],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 328],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 328],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 328],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 329],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 329],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 329],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 329],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 330],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 330],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 330],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 330],
        ];

        $pilihanBagian2Level4 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 331],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 331],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 331],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 331],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 332],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 332],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 332],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 332],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 333],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 333],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 333],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 333],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 334],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 334],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 334],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 334],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 335],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 335],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 335],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 335],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 336],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 336],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 336],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 336],
        ];



        DB::table('pilihan')->insert(array_merge($pilihanBagian2Level1, $pilihanBagian2Level2, $pilihanBagian2Level3, $pilihanBagian2Level4));


        $soalBagian3Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 4, 'paket_id' => 3],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 4, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 4, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 4, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 4, 'paket_id' => 3],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 4, 'paket_id' => 3],
        ];

        $soalBagian3Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 4, 'paket_id' => 3],
        ];

        $soalBagian3Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 4, 'paket_id' => 3],
        ];

        $soalBagian3Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 4, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian3Level1, $soalBagian3Level2, $soalBagian3Level3, $soalBagian3Level4));

        $pilihanBagian3Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 337],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 337],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 337],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 337],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 338],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 338],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 338],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 338],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 339],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 339],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 339],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 339],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 340],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 340],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 340],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 340],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 341],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 341],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 341],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 341],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 342],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 342],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 342],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 342],
        ];

        $pilihanBagian3Level2 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 343],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 343],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 343],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 343],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 344],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 344],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 344],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 344],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 345],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 345],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 345],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 345],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 346],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 346],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 346],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 346],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 347],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 347],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 347],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 347],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 348],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 348],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 348],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 348],
        ];

        $pilihanBagian3Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 349],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 349],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 349],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 349],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 350],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 350],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 350],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 350],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 351],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 351],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 351],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 351],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 352],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 352],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 352],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 352],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 353],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 353],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 353],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 353],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 354],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 354],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 354],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 354],
        ];

        $pilihanBagian3Level4 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 355],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 355],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 355],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 355],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 356],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 356],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 356],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 356],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 357],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 357],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 357],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 357],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 358],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 358],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 358],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 358],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 359],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 359],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 359],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 359],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 360],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 360],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 360],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 360],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian3Level1, $pilihanBagian3Level2, $pilihanBagian3Level3, $pilihanBagian3Level4));


        $soalBagian4Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 4, 'paket_id' => 3],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 4, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 4, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 4, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 4, 'paket_id' => 3],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 4, 'paket_id' => 3],
        ];

        $soalBagian4Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 4, 'paket_id' => 3],
        ];

        $soalBagian4Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 4, 'paket_id' => 3],
        ];

        $soalBagian4Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 4, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 4, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian4Level1, $soalBagian4Level2, $soalBagian4Level3, $soalBagian4Level4));

        $pilihanBagian4Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 361],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 361],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 361],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 361],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 362],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 362],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 362],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 362],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 363],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 363],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 363],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 363],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 364],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 364],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 364],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 364],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 365],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 365],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 365],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 365],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 366],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 366],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 366],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 366],
        ];

        $pilihanBagian4Level2 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 367],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 367],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 367],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 367],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 368],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 368],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 368],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 368],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 369],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 369],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 369],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 369],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 370],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 370],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 370],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 370],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 371],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 371],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 371],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 371],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 372],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 372],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 372],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 372],
        ];

        $pilihanBagian4Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 373],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 373],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 373],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 373],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 374],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 374],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 374],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 374],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 375],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 375],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 375],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 375],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 376],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 376],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 376],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 376],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 377],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 377],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 377],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 377],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 378],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 378],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 378],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 378],
        ];

        $pilihanBagian4Level4 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 379],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 379],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 379],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 379],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 380],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 380],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 380],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 380],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 381],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 381],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 381],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 381],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 382],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 382],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 382],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 382],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 383],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 383],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 383],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 383],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 384],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 384],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 384],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 384],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian4Level1, $pilihanBagian4Level2, $pilihanBagian4Level3, $pilihanBagian4Level4));


        // Mapel Bahasa
        $soalBagian1Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 5, 'paket_id' => 3],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 5, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 5, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 5, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 5, 'paket_id' => 3],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 5, 'paket_id' => 3],
        ];

        $soalBagian1Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 5, 'paket_id' => 3],
        ];

        $soalBagian1Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 5, 'paket_id' => 3],
        ];

        $soalBagian1Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 5, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian1Level1, $soalBagian1Level2, $soalBagian1Level3, $soalBagian1Level4));

        $pilihanBagian1Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 385],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 385],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 385],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 385],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 386],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 386],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 386],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 386],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 387],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 387],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 387],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 387],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 388],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 388],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 388],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 388],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 389],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 389],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 389],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 389],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 390],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 390],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 390],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 390],
        ];

        $pilihanBagian1Level2 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 391],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 391],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 391],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 391],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 392],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 392],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 392],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 392],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 393],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 393],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 393],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 393],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 394],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 394],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 394],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 394],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 395],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 395],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 395],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 395],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 396],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 396],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 396],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 396],
        ];

        $pilihanBagian1Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 397],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 397],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 397],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 397],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 398],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 398],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 398],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 398],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 399],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 399],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 399],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 399],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 400],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 400],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 400],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 400],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 401],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 401],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 401],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 401],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 402],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 402],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 402],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 402],
        ];

        $pilihanBagian1Level4 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 403],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 403],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 403],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 403],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 404],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 404],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 404],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 404],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 405],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 405],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 405],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 405],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 406],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 406],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 406],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 406],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 407],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 407],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 407],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 407],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 408],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 408],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 408],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 408],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian1Level1, $pilihanBagian1Level2, $pilihanBagian1Level3, $pilihanBagian1Level4));

        $soalBagian2Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 5, 'paket_id' => 3],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 5, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 5, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 5, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 5, 'paket_id' => 3],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 5, 'paket_id' => 3],
        ];

        $soalBagian2Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 5, 'paket_id' => 3],
        ];

        $soalBagian2Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 5, 'paket_id' => 3],
        ];

        $soalBagian2Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 5, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian2Level1, $soalBagian2Level2, $soalBagian2Level3, $soalBagian2Level4));

        $pilihanBagian2Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 409],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 409],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 409],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 409],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 410],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 410],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 410],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 410],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 411],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 411],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 411],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 411],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 412],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 412],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 412],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 412],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 413],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 413],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 413],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 413],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 414],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 414],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 414],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 414],
        ];

        $pilihanBagian2Level2 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 415],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 415],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 415],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 415],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 416],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 416],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 416],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 416],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 417],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 417],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 417],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 417],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 418],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 418],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 418],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 418],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 419],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 419],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 419],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 419],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 420],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 420],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 420],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 420],
        ];

        $pilihanBagian2Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 421],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 421],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 421],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 421],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 422],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 422],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 422],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 422],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 423],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 423],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 423],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 423],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 424],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 424],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 424],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 424],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 425],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 425],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 425],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 425],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 426],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 426],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 426],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 426],
        ];

        $pilihanBagian2Level4 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 427],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 427],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 427],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 427],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 428],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 428],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 428],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 428],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 429],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 429],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 429],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 429],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 430],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 430],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 430],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 430],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 431],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 431],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 431],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 431],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 432],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 432],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 432],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 432],
        ];



        DB::table('pilihan')->insert(array_merge($pilihanBagian2Level1, $pilihanBagian2Level2, $pilihanBagian2Level3, $pilihanBagian2Level4));


        $soalBagian3Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 5, 'paket_id' => 3],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 5, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 5, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 5, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 5, 'paket_id' => 3],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 5, 'paket_id' => 3],
        ];

        $soalBagian3Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 5, 'paket_id' => 3],
        ];

        $soalBagian3Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 5, 'paket_id' => 3],
        ];

        $soalBagian3Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 5, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian3Level1, $soalBagian3Level2, $soalBagian3Level3, $soalBagian3Level4));

        $pilihanBagian3Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 433],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 433],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 433],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 433],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 434],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 434],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 434],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 434],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 435],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 435],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 435],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 435],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 436],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 436],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 436],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 436],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 437],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 437],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 437],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 437],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 438],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 438],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 438],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 438],
        ];

        $pilihanBagian3Level2 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 439],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 439],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 439],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 439],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 440],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 440],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 440],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 440],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 441],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 441],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 441],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 441],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 442],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 442],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 442],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 442],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 443],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 443],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 443],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 443],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 444],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 444],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 444],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 444],
        ];

        $pilihanBagian3Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 445],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 445],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 445],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 445],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 446],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 446],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 446],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 446],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 447],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 447],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 447],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 447],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 448],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 448],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 448],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 448],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 449],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 449],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 449],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 449],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 450],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 450],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 450],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 450],
        ];

        $pilihanBagian3Level4 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 451],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 451],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 451],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 451],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 452],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 452],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 452],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 452],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 453],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 453],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 453],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 453],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 454],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 454],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 454],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 454],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 455],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 455],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 455],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 455],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 456],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 456],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 456],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 456],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian3Level1, $pilihanBagian3Level2, $pilihanBagian3Level3, $pilihanBagian3Level4));


        $soalBagian4Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 5, 'paket_id' => 3],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 5, 'paket_id' => 3],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 5, 'paket_id' => 3],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 5, 'paket_id' => 3],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 5, 'paket_id' => 3],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 5, 'paket_id' => 3],
        ];

        $soalBagian4Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 5, 'paket_id' => 3],
        ];

        $soalBagian4Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 5, 'paket_id' => 3],
        ];

        $soalBagian4Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 5, 'paket_id' => 3],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 5, 'paket_id' => 3],
        ];

        DB::table('soal')->insert(array_merge($soalBagian4Level1, $soalBagian4Level2, $soalBagian4Level3, $soalBagian4Level4));

        $pilihanBagian4Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 457],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 457],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 457],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 457],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 458],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 458],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 458],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 458],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 459],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 459],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 459],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 459],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 460],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 460],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 460],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 460],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 461],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 461],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 461],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 461],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 462],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 462],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 462],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 462],
        ];

        $pilihanBagian4Level2 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 463],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 463],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 463],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 463],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 464],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 464],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 464],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 464],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 465],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 465],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 465],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 465],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 466],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 466],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 466],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 466],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 467],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 467],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 467],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 467],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 468],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 468],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 468],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 468],
        ];

        $pilihanBagian4Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 469],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 469],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 469],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 469],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 470],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 470],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 470],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 470],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 471],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 471],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 471],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 471],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 472],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 472],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 472],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 472],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 473],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 473],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 473],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 473],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 474],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 474],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 474],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 474],
        ];

        $pilihanBagian4Level4 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 475],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 475],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 475],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 475],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 476],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 476],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 476],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 476],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 477],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 477],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 477],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 477],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 478],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 478],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 478],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 478],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 479],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 479],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 479],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 479],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 480],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 480],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 480],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 480],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian4Level1, $pilihanBagian4Level2, $pilihanBagian4Level3, $pilihanBagian4Level4));
    }
}
