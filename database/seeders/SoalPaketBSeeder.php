<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoalPaketBSeeder extends Seeder
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
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 1, 'paket_id' => 2],
        ];

        $soalBagian1Level2 = [
            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 7
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 8
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 9
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 10
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 1, 'paket_id' => 2],
        ];

        $soalBagian1Level3 = [
            // Pertanyaan 11
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 12
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 13
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 14
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 15
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 1, 'paket_id' => 2],
        ];

        $soalBagian1Level4 = [
            // Pertanyaan 16
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 17
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 18
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 19
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 20
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 1, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian1Level1, $soalBagian1Level2, $soalBagian1Level3, $soalBagian1Level4));

        $pilihanBagian1Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 401],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 401],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 401],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 401],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 402],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 402],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 402],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 402],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 403],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 403],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 403],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 403],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 404],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 404],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 404],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 404],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 405],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 405],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 405],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 405],
        ];

        $pilihanBagian1Level2 = [
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 406],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 406],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 406],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 406],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 407],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 407],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 407],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 407],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 408],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 408],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 408],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 408],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 409],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 409],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 409],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 409],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 410],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 410],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 410],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 410],
        ];

        $pilihanBagian1Level3 = [
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 411],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 411],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 411],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 411],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 412],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 412],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 412],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 412],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 413],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 413],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 413],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 413],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 414],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 414],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 414],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 414],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 415],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 415],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 415],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 415],
        ];

        $pilihanBagian1Level4 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 416],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 416],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 416],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 416],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 417],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 417],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 417],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 417],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 418],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 418],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 418],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 418],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 419],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 419],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 419],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 419],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 420],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 420],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 420],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 420],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian1Level1, $pilihanBagian1Level2, $pilihanBagian1Level3, $pilihanBagian1Level4));

        $soalBagian2Level1 = [

            // Pertanyaan 21
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 22
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 23
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 24
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 25
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 1, 'paket_id' => 2],
        ];

        $soalBagian2Level2 = [
            // Pertanyaan 26
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 27
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 28
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 29
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 30
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 1, 'paket_id' => 2],
        ];

        $soalBagian2Level3 = [
            // Pertanyaan 31
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 32
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 33
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 34
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 35
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 1, 'paket_id' => 2],
        ];

        $soalBagian2Level4 = [
            // Pertanyaan 36
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 37
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 38
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 39
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 40
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 1, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian2Level1, $soalBagian2Level2, $soalBagian2Level3, $soalBagian2Level4));

        $pilihanBagian2Level1 = [
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 421],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 421],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 421],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 421],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 422],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 422],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 422],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 422],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 423],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 423],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 423],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 423],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 424],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 424],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 424],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 424],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 425],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 425],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 425],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 425],
        ];

        $pilihanBagian2Level2 = [
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 426],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 426],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 426],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 426],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 427],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 427],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 427],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 427],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 428],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 428],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 428],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 428],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 429],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 429],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 429],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 429],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 430],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 430],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 430],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 430],
        ];

        $pilihanBagian2Level3 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 431],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 431],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 431],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 431],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 432],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 432],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 432],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 432],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 433],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 433],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 433],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 433],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 434],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 434],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 434],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 434],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 435],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 435],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 435],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 435],
        ];

        $pilihanBagian2Level4 = [
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 436],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 436],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 436],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 436],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 437],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 437],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 437],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 437],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 438],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 438],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 438],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 438],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 439],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 439],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 439],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 439],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 440],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 440],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 440],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 440],
        ];



        DB::table('pilihan')->insert(array_merge($pilihanBagian2Level1, $pilihanBagian2Level2, $pilihanBagian2Level3, $pilihanBagian2Level4));


        $soalBagian3Level1 = [
            // Pertanyaan 41
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 42
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 43
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 44
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 45
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 1, 'paket_id' => 2],
        ];

        $soalBagian3Level2 = [
            // Pertanyaan 46
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 47
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 48
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 49
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 50
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 1, 'paket_id' => 2],
        ];

        $soalBagian3Level3 = [
            // Pertanyaan 51
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 52
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 53
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 54
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 55
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 1, 'paket_id' => 2],
        ];

        $soalBagian3Level4 = [
            // Pertanyaan 56
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 57
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 58
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 59
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 60
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 1, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian3Level1, $soalBagian3Level2, $soalBagian3Level3, $soalBagian3Level4));

        $pilihanBagian3Level1 = [
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 441],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 441],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 441],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 441],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 442],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 442],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 442],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 442],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 443],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 443],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 443],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 443],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 444],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 444],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 444],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 444],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 445],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 445],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 445],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 445],
        ];

        $pilihanBagian3Level2 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 446],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 446],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 446],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 446],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 447],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 447],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 447],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 447],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 448],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 448],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 448],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 448],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 449],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 449],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 449],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 449],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 450],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 450],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 450],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 450],
        ];

        $pilihanBagian3Level3 = [
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 451],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 451],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 451],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 451],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 452],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 452],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 452],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 452],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 453],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 453],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 453],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 453],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 454],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 454],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 454],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 454],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 455],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 455],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 455],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 455],
        ];

        $pilihanBagian3Level4 = [
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 456],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 456],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 456],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 456],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 457],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 457],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 457],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 457],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 458],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 458],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 458],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 458],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 459],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 459],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 459],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 459],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 460],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 460],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 460],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 460],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian3Level1, $pilihanBagian3Level2, $pilihanBagian3Level3, $pilihanBagian3Level4));


        $soalBagian4Level1 = [
            // Pertanyaan 61
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 62
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 63
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 64
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 65
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 1, 'paket_id' => 2],
        ];

        $soalBagian4Level2 = [
            // Pertanyaan 66
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 67
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 68
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 69
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 70
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 1, 'paket_id' => 2],
        ];

        $soalBagian4Level3 = [
            // Pertanyaan 71
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 72
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 73
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 74
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 75
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 1, 'paket_id' => 2],
        ];

        $soalBagian4Level4 = [
            // Pertanyaan 76
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 77
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 78
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 79
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 1, 'paket_id' => 2],

            // Pertanyaan 80
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 1, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian4Level1, $soalBagian4Level2, $soalBagian4Level3, $soalBagian4Level4));

        $pilihanBagian4Level1 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 461],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 461],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 461],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 461],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 462],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 462],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 462],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 462],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 463],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 463],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 463],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 463],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 464],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 464],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 464],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 464],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 465],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 465],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 465],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 465],
        ];

        $pilihanBagian4Level2 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 466],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 466],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 466],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 466],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 467],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 467],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 467],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 467],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 468],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 468],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 468],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 468],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 469],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 469],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 469],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 469],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 470],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 470],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 470],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 470],
        ];

        $pilihanBagian4Level3 = [
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 471],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 471],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 471],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 471],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 472],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 472],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 472],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 472],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 473],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 473],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 473],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 473],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 474],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 474],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 474],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 474],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 475],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 475],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 475],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 475],
        ];

        $pilihanBagian4Level4 = [
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 476],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 476],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 476],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 476],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 477],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 477],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 477],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 477],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 478],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 478],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 478],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 478],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 479],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 479],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 479],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 479],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 480],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 480],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 480],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 480],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian4Level1, $pilihanBagian4Level2, $pilihanBagian4Level3, $pilihanBagian4Level4));

        // Mapel PPKN
        $soalBagian1Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 2, 'paket_id' => 2],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 2, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 2, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 2, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 2, 'paket_id' => 2],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 2, 'paket_id' => 2],
        ];

        $soalBagian1Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 2, 'paket_id' => 2],
        ];

        $soalBagian1Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 2, 'paket_id' => 2],
        ];

        $soalBagian1Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 2, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian1Level1, $soalBagian1Level2, $soalBagian1Level3, $soalBagian1Level4));

        $pilihanBagian1Level1 = [
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 481],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 481],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 481],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 481],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 482],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 482],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 482],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 482],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 483],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 483],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 483],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 483],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 484],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 484],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 484],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 484],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 485],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 485],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 485],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 485],
        ];

        $pilihanBagian1Level2 = [
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 486],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 486],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 486],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 486],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 487],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 487],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 487],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 487],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 488],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 488],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 488],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 488],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 489],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 489],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 489],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 489],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 490],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 490],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 490],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 490],
        ];

        $pilihanBagian1Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 491],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 491],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 491],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 491],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 492],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 492],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 492],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 492],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 493],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 493],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 493],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 493],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 494],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 494],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 494],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 494],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 495],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 495],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 495],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 495],
        ];

        $pilihanBagian1Level4 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 496],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 496],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 496],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 496],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 497],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 497],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 497],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 497],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 498],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 498],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 498],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 498],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 499],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 499],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 499],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 499],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 500],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 500],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 500],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 500],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian1Level1, $pilihanBagian1Level2, $pilihanBagian1Level3, $pilihanBagian1Level4));

        $soalBagian2Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 2, 'paket_id' => 2],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 2, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 2, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 2, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 2, 'paket_id' => 2],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 2, 'paket_id' => 2],
        ];

        $soalBagian2Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 2, 'paket_id' => 2],
        ];

        $soalBagian2Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 2, 'paket_id' => 2],
        ];

        $soalBagian2Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 2, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian2Level1, $soalBagian2Level2, $soalBagian2Level3, $soalBagian2Level4));

        $pilihanBagian2Level1 = [
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 501],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 501],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 501],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 501],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 502],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 502],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 502],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 502],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 503],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 503],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 503],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 503],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 504],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 504],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 504],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 504],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 505],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 505],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 505],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 505],
        ];

        $pilihanBagian2Level2 = [
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 506],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 506],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 506],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 506],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 507],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 507],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 507],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 507],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 508],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 508],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 508],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 508],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 509],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 509],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 509],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 509],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 510],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 510],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 510],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 510],
        ];

        $pilihanBagian2Level3 = [
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 511],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 511],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 511],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 511],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 512],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 512],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 512],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 512],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 513],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 513],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 513],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 513],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 514],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 514],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 514],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 514],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 515],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 515],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 515],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 515],
        ];

        $pilihanBagian2Level4 = [
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 516],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 516],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 516],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 516],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 517],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 517],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 517],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 517],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 518],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 518],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 518],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 518],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 519],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 519],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 519],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 519],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 520],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 520],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 520],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 520],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian2Level1, $pilihanBagian2Level2, $pilihanBagian2Level3, $pilihanBagian2Level4));


        $soalBagian3Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 2, 'paket_id' => 2],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 2, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 2, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 2, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 2, 'paket_id' => 2],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 2, 'paket_id' => 2],
        ];

        $soalBagian3Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 2, 'paket_id' => 2],
        ];

        $soalBagian3Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 2, 'paket_id' => 2],
        ];

        $soalBagian3Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 2, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian3Level1, $soalBagian3Level2, $soalBagian3Level3, $soalBagian3Level4));

        $pilihanBagian3Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 521],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 521],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 521],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 521],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 522],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 522],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 522],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 522],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 523],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 523],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 523],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 523],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 524],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 524],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 524],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 524],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 525],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 525],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 525],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 525],
        ];

        $pilihanBagian3Level2 = [
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 526],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 526],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 526],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 526],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 527],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 527],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 527],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 527],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 528],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 528],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 528],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 528],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 529],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 529],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 529],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 529],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 530],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 530],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 530],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 530],
        ];

        $pilihanBagian3Level3 = [
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 531],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 531],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 531],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 531],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 532],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 532],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 532],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 532],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 533],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 533],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 533],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 533],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 534],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 534],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 534],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 534],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 535],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 535],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 535],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 535],
        ];

        $pilihanBagian3Level4 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 536],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 536],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 536],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 536],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 537],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 537],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 537],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 537],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 538],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 538],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 538],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 538],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 539],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 539],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 539],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 539],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 540],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 540],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 540],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 540],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian3Level1, $pilihanBagian3Level2, $pilihanBagian3Level3, $pilihanBagian3Level4));


        $soalBagian4Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 2, 'paket_id' => 2],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 2, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 2, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 2, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 2, 'paket_id' => 2],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 2, 'paket_id' => 2],
        ];

        $soalBagian4Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 2, 'paket_id' => 2],
        ];

        $soalBagian4Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 2, 'paket_id' => 2],
        ];

        $soalBagian4Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 2, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 2, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian4Level1, $soalBagian4Level2, $soalBagian4Level3, $soalBagian4Level4));

        $pilihanBagian4Level1 = [
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 541],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 541],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 541],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 541],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 542],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 542],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 542],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 542],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 543],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 543],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 543],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 543],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 544],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 544],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 544],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 544],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 545],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 545],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 545],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 545],
        ];

        $pilihanBagian4Level2 = [
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 546],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 546],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 546],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 546],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 547],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 547],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 547],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 547],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 548],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 548],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 548],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 548],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 549],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 549],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 549],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 549],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 550],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 550],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 550],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 550],
        ];

        $pilihanBagian4Level3 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 551],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 551],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 551],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 551],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 552],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 552],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 552],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 552],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 553],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 553],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 553],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 553],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 554],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 554],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 554],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 554],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 555],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 555],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 555],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 555],
        ];

        $pilihanBagian4Level4 = [
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 556],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 556],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 556],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 556],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 557],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 557],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 557],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 557],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 558],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 558],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 558],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 558],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 559],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 559],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 559],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 559],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 560],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 560],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 560],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 560],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian4Level1, $pilihanBagian4Level2, $pilihanBagian4Level3, $pilihanBagian4Level4));

        // Mapel PAI
        $soalBagian1Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 3, 'paket_id' => 2],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 3, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 3, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 3, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 3, 'paket_id' => 2],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 3, 'paket_id' => 2],
        ];

        $soalBagian1Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 3, 'paket_id' => 2],
        ];

        $soalBagian1Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 3, 'paket_id' => 2],
        ];

        $soalBagian1Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 3, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian1Level1, $soalBagian1Level2, $soalBagian1Level3, $soalBagian1Level4));

        $pilihanBagian1Level1 = [
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 561],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 561],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 561],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 561],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 562],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 562],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 562],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 562],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 563],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 563],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 563],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 563],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 564],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 564],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 564],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 564],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 565],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 565],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 565],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 565],
        ];

        $pilihanBagian1Level2 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 566],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 566],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 566],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 566],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 567],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 567],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 567],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 567],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 568],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 568],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 568],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 568],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 569],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 569],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 569],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 569],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 570],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 570],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 570],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 570],
        ];

        $pilihanBagian1Level3 = [
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 571],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 571],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 571],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 571],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 572],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 572],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 572],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 572],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 573],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 573],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 573],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 573],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 574],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 574],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 574],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 574],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 575],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 575],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 575],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 575],
        ];

        $pilihanBagian1Level4 = [
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 576],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 576],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 576],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 576],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 577],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 577],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 577],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 577],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 578],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 578],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 578],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 578],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 579],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 579],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 579],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 579],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 580],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 580],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 580],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 580],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian1Level1, $pilihanBagian1Level2, $pilihanBagian1Level3, $pilihanBagian1Level4));

        $soalBagian2Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 3, 'paket_id' => 2],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 3, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 3, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 3, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 3, 'paket_id' => 2],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 3, 'paket_id' => 2],
        ];

        $soalBagian2Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 3, 'paket_id' => 2],
        ];

        $soalBagian2Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 3, 'paket_id' => 2],
        ];

        $soalBagian2Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 3, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian2Level1, $soalBagian2Level2, $soalBagian2Level3, $soalBagian2Level4));

        $pilihanBagian2Level1 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 581],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 581],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 581],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 581],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 582],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 582],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 582],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 582],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 583],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 583],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 583],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 583],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 584],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 584],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 584],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 584],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 585],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 585],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 585],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 585],
        ];

        $pilihanBagian2Level2 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 586],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 586],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 586],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 586],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 587],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 587],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 587],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 587],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 588],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 588],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 588],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 588],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 589],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 589],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 589],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 589],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 590],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 590],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 590],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 590],
        ];

        $pilihanBagian2Level3 = [
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 591],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 591],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 591],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 591],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 592],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 592],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 592],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 592],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 593],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 593],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 593],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 593],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 594],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 594],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 594],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 594],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 595],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 595],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 595],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 595],
        ];

        $pilihanBagian2Level4 = [
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 596],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 596],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 596],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 596],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 597],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 597],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 597],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 597],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 598],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 598],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 598],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 598],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 599],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 599],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 599],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 599],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 600],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 600],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 600],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 600],
        ];



        DB::table('pilihan')->insert(array_merge($pilihanBagian2Level1, $pilihanBagian2Level2, $pilihanBagian2Level3, $pilihanBagian2Level4));


        $soalBagian3Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 3, 'paket_id' => 2],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 3, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 3, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 3, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 3, 'paket_id' => 2],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 3, 'paket_id' => 2],
        ];

        $soalBagian3Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 3, 'paket_id' => 2],
        ];

        $soalBagian3Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 3, 'paket_id' => 2],
        ];

        $soalBagian3Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 3, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian3Level1, $soalBagian3Level2, $soalBagian3Level3, $soalBagian3Level4));

        $pilihanBagian3Level1 = [
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 601],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 601],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 601],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 601],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 602],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 602],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 602],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 602],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 603],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 603],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 603],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 603],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 604],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 604],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 604],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 604],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 605],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 605],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 605],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 605],
        ];

        $pilihanBagian3Level2 = [
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 606],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 606],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 606],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 606],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 607],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 607],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 607],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 607],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 608],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 608],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 608],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 608],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 609],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 609],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 609],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 609],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 610],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 610],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 610],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 610],
        ];

        $pilihanBagian3Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 611],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 611],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 611],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 611],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 612],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 612],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 612],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 612],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 613],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 613],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 613],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 613],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 614],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 614],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 614],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 614],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 615],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 615],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 615],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 615],
        ];

        $pilihanBagian3Level4 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 616],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 616],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 616],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 616],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 617],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 617],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 617],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 617],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 618],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 618],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 618],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 618],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 619],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 619],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 619],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 619],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 620],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 620],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 620],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 620],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian3Level1, $pilihanBagian3Level2, $pilihanBagian3Level3, $pilihanBagian3Level4));


        $soalBagian4Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 3, 'paket_id' => 2],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 3, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 3, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 3, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 3, 'paket_id' => 2],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 3, 'paket_id' => 2],
        ];

        $soalBagian4Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 3, 'paket_id' => 2],
        ];

        $soalBagian4Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 3, 'paket_id' => 2],
        ];

        $soalBagian4Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 3, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 3, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian4Level1, $soalBagian4Level2, $soalBagian4Level3, $soalBagian4Level4));

        $pilihanBagian4Level1 = [
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 621],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 621],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 621],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 621],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 622],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 622],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 622],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 622],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 623],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 623],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 623],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 623],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 624],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 624],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 624],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 624],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 625],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 625],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 625],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 625],
        ];

        $pilihanBagian4Level2 = [
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 626],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 626],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 626],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 626],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 627],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 627],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 627],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 627],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 628],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 628],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 628],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 628],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 629],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 629],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 629],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 629],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 630],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 630],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 630],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 630],
        ];

        $pilihanBagian4Level3 = [
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 631],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 631],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 631],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 631],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 632],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 632],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 632],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 632],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 633],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 633],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 633],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 633],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 634],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 634],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 634],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 634],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 635],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 635],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 635],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 635],
        ];

        $pilihanBagian4Level4 = [
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 636],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 636],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 636],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 636],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 637],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 637],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 637],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 637],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 638],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 638],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 638],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 638],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 639],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 639],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 639],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 639],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 240],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 240],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 240],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 240],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian4Level1, $pilihanBagian4Level2, $pilihanBagian4Level3, $pilihanBagian4Level4));


        // Mapel Sejarah
        $soalBagian1Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 4, 'paket_id' => 2],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 4, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 4, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 4, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 4, 'paket_id' => 2],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 4, 'paket_id' => 2],
        ];

        $soalBagian1Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 4, 'paket_id' => 2],
        ];

        $soalBagian1Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 4, 'paket_id' => 2],
        ];

        $soalBagian1Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 4, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian1Level1, $soalBagian1Level2, $soalBagian1Level3, $soalBagian1Level4));

        $pilihanBagian1Level1 = [
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
        ];

        $pilihanBagian1Level2 = [
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 246],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 246],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 246],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 246],
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
        ];

        $pilihanBagian1Level3 = [
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
        ];

        $pilihanBagian1Level4 = [
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
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian1Level1, $pilihanBagian1Level2, $pilihanBagian1Level3, $pilihanBagian1Level4));

        $soalBagian2Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 4, 'paket_id' => 2],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 4, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 4, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 4, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 4, 'paket_id' => 2],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 4, 'paket_id' => 2],
        ];

        $soalBagian2Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 4, 'paket_id' => 2],
        ];

        $soalBagian2Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 4, 'paket_id' => 2],
        ];

        $soalBagian2Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 4, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian2Level1, $soalBagian2Level2, $soalBagian2Level3, $soalBagian2Level4));

        $pilihanBagian2Level1 = [
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
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 265],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 265],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 265],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 265],
        ];

        $pilihanBagian2Level2 = [
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

        $pilihanBagian2Level3 = [
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
        ];

        $pilihanBagian2Level4 = [
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 276],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 276],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 276],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 276],
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
        ];



        DB::table('pilihan')->insert(array_merge($pilihanBagian2Level1, $pilihanBagian2Level2, $pilihanBagian2Level3, $pilihanBagian2Level4));


        $soalBagian3Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 4, 'paket_id' => 2],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 4, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 4, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 4, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 4, 'paket_id' => 2],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 4, 'paket_id' => 2],
        ];

        $soalBagian3Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 4, 'paket_id' => 2],
        ];

        $soalBagian3Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 4, 'paket_id' => 2],
        ];

        $soalBagian3Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 4, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian3Level1, $soalBagian3Level2, $soalBagian3Level3, $soalBagian3Level4));

        $pilihanBagian3Level1 = [
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
        ];

        $pilihanBagian3Level2 = [
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
        ];

        $pilihanBagian3Level3 = [
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
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 295],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 295],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 295],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 295],
        ];

        $pilihanBagian3Level4 = [
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

        DB::table('pilihan')->insert(array_merge($pilihanBagian3Level1, $pilihanBagian3Level2, $pilihanBagian3Level3, $pilihanBagian3Level4));


        $soalBagian4Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 4, 'paket_id' => 2],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 4, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 4, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 4, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 4, 'paket_id' => 2],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 4, 'paket_id' => 2],
        ];

        $soalBagian4Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 4, 'paket_id' => 2],
        ];

        $soalBagian4Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 4, 'paket_id' => 2],
        ];

        $soalBagian4Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 4, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 4, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian4Level1, $soalBagian4Level2, $soalBagian4Level3, $soalBagian4Level4));

        $pilihanBagian4Level1 = [
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
        ];

        $pilihanBagian4Level2 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 306],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 306],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 306],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 306],
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
        ];

        $pilihanBagian4Level3 = [
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
        ];

        $pilihanBagian4Level4 = [
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
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian4Level1, $pilihanBagian4Level2, $pilihanBagian4Level3, $pilihanBagian4Level4));


        // Mapel Bahasa
        $soalBagian1Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 5, 'paket_id' => 2],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 5, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 5, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 5, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 5, 'paket_id' => 2],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1, 'category_id' => 5, 'paket_id' => 2],
        ];

        $soalBagian1Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 2, 'category_id' => 5, 'paket_id' => 2],
        ];

        $soalBagian1Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 3, 'category_id' => 5, 'paket_id' => 2],
        ];

        $soalBagian1Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 4, 'category_id' => 5, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian1Level1, $soalBagian1Level2, $soalBagian1Level3, $soalBagian1Level4));

        $pilihanBagian1Level1 = [
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
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 325],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 325],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 325],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 325],
        ];

        $pilihanBagian1Level2 = [
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

        $pilihanBagian1Level3 = [
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
        ];

        $pilihanBagian1Level4 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 336],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 336],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 336],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 336],
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
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian1Level1, $pilihanBagian1Level2, $pilihanBagian1Level3, $pilihanBagian1Level4));

        $soalBagian2Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 5, 'paket_id' => 2],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 5, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 5, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 5, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 5, 'paket_id' => 2],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5, 'category_id' => 5, 'paket_id' => 2],
        ];

        $soalBagian2Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 6, 'category_id' => 5, 'paket_id' => 2],
        ];

        $soalBagian2Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 7, 'category_id' => 5, 'paket_id' => 2],
        ];

        $soalBagian2Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 8, 'category_id' => 5, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian2Level1, $soalBagian2Level2, $soalBagian2Level3, $soalBagian2Level4));

        $pilihanBagian2Level1 = [
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
        ];

        $pilihanBagian2Level2 = [
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
        ];

        $pilihanBagian2Level3 = [
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
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 355],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 355],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 355],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 355],
        ];

        $pilihanBagian2Level4 = [
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

        DB::table('pilihan')->insert(array_merge($pilihanBagian2Level1, $pilihanBagian2Level2, $pilihanBagian2Level3, $pilihanBagian2Level4));

        $soalBagian3Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 5, 'paket_id' => 2],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 5, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 5, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 5, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 5, 'paket_id' => 2],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9, 'category_id' => 5, 'paket_id' => 2],
        ];

        $soalBagian3Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 10, 'category_id' => 5, 'paket_id' => 2],
        ];

        $soalBagian3Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 11, 'category_id' => 5, 'paket_id' => 2],
        ];

        $soalBagian3Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 12, 'category_id' => 5, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian3Level1, $soalBagian3Level2, $soalBagian3Level3, $soalBagian3Level4));

        $pilihanBagian3Level1 = [
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
        ];

        $pilihanBagian3Level2 = [
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 366],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 366],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 366],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 366],
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
        ];

        $pilihanBagian3Level3 = [
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
        ];

        $pilihanBagian3Level4 = [
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
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian3Level1, $pilihanBagian3Level2, $pilihanBagian3Level3, $pilihanBagian3Level4));


        $soalBagian4Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 5, 'paket_id' => 2],
            // Pertanyaan 2
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 5, 'paket_id' => 2],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 5, 'paket_id' => 2],

            // Pertanyaan 4
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 5, 'paket_id' => 2],

            // Pertanyaan 5
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 5, 'paket_id' => 2],

            // Pertanyaan 6
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13, 'category_id' => 5, 'paket_id' => 2],
        ];

        $soalBagian4Level2 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 14, 'category_id' => 5, 'paket_id' => 2],
        ];

        $soalBagian4Level3 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 15, 'category_id' => 5, 'paket_id' => 2],
        ];

        $soalBagian4Level4 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 5, 'paket_id' => 2],

            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 16, 'category_id' => 5, 'paket_id' => 2],
        ];

        DB::table('soal')->insert(array_merge($soalBagian4Level1, $soalBagian4Level2, $soalBagian4Level3, $soalBagian4Level4));

        $pilihanBagian4Level1 = [
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
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 385],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 385],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 385],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 385],
        ];

        $pilihanBagian4Level2 = [
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

        $pilihanBagian4Level3 = [
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
        ];

        $pilihanBagian4Level4 = [
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 396],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 396],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 396],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 396],
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
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian4Level1, $pilihanBagian4Level2, $pilihanBagian4Level3, $pilihanBagian4Level4));
    }
}
