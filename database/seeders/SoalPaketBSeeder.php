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
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 640],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 640],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 640],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 640],
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
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 641],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 641],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 641],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 641],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 642],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 642],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 642],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 642],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 643],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 643],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 643],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 643],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 644],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 644],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 644],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 644],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 645],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 645],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 645],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 645],
        ];

        $pilihanBagian1Level2 = [
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 646],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 646],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 646],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 646],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 647],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 647],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 647],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 647],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 648],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 648],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 648],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 648],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 649],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 649],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 649],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 649],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 650],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 650],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 650],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 650],
        ];

        $pilihanBagian1Level3 = [
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 651],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 651],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 651],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 651],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 652],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 652],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 652],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 652],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 653],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 653],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 653],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 653],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 654],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 654],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 654],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 654],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 655],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 655],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 655],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 655],
        ];

        $pilihanBagian1Level4 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 656],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 656],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 656],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 656],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 657],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 657],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 657],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 657],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 658],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 658],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 658],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 658],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 659],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 659],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 659],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 659],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 660],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 660],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 660],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 660],
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
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 661],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 661],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 661],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 661],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 662],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 662],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 662],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 662],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 663],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 663],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 663],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 663],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 664],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 664],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 664],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 664],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 665],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 665],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 665],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 665],
        ];

        $pilihanBagian2Level2 = [
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 666],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 666],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 666],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 666],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 667],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 667],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 667],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 667],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 668],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 668],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 668],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 668],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 669],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 669],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 669],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 669],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 670],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 670],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 670],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 670],
        ];

        $pilihanBagian2Level3 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 671],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 671],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 671],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 671],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 672],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 672],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 672],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 672],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 673],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 673],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 673],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 673],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 674],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 674],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 674],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 674],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 675],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 675],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 675],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 675],
        ];

        $pilihanBagian2Level4 = [
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 676],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 676],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 676],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 676],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 677],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 677],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 677],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 677],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 678],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 678],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 678],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 678],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 679],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 679],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 679],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 679],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 680],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 680],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 680],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 680],
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
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 681],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 681],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 681],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 681],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 682],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 682],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 682],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 682],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 683],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 683],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 683],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 683],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 684],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 684],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 684],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 684],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 685],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 685],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 685],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 685],
        ];

        $pilihanBagian3Level2 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 686],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 686],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 686],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 686],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 687],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 687],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 687],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 687],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 688],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 688],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 688],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 688],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 689],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 689],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 689],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 689],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 690],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 690],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 690],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 690],
        ];

        $pilihanBagian3Level3 = [
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 691],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 691],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 691],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 691],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 692],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 692],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 692],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 692],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 693],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 693],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 693],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 693],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 694],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 694],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 694],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 694],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 695],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 695],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 695],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 695],
        ];

        $pilihanBagian3Level4 = [
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 696],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 696],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 696],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 696],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 697],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 697],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 697],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 697],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 698],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 698],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 698],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 698],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 699],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 699],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 699],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 699],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 700],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 700],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 700],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 700],
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
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 701],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 701],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 701],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 701],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 702],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 702],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 702],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 702],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 703],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 703],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 703],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 703],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 704],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 704],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 704],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 704],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 705],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 705],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 705],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 705],
        ];

        $pilihanBagian4Level2 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 706],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 706],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 706],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 706],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 707],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 707],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 707],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 707],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 708],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 708],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 708],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 708],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 709],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 709],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 709],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 709],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 710],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 710],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 710],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 710],
        ];

        $pilihanBagian4Level3 = [
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 711],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 711],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 711],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 711],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 712],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 712],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 712],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 712],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 713],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 713],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 713],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 713],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 714],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 714],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 714],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 714],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 715],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 715],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 715],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 715],
        ];

        $pilihanBagian4Level4 = [
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 716],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 716],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 716],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 716],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 717],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 717],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 717],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 717],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 718],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 718],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 718],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 718],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 719],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 719],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 719],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 719],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 720],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 720],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 720],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 720],
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
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 721],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 721],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 721],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 721],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 722],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 722],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 722],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 722],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 723],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 723],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 723],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 723],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 724],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 724],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 724],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 724],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 725],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 725],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 725],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 725],
        ];

        $pilihanBagian1Level2 = [
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 726],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 726],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 726],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 726],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 727],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 727],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 727],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 727],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 728],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 728],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 728],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 728],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 729],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 729],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 729],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 729],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 730],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 730],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 730],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 730],
        ];

        $pilihanBagian1Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 731],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 731],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 731],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 731],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 732],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 732],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 732],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 732],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 733],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 733],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 733],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 733],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 734],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 734],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 734],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 734],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 735],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 735],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 735],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 735],
        ];

        $pilihanBagian1Level4 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 736],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 736],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 736],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 736],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 737],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 737],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 737],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 737],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 738],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 738],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 738],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 738],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 739],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 739],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 739],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 739],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 740],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 740],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 740],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 740],
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
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 741],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 741],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 741],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 741],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 742],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 742],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 742],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 742],
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
