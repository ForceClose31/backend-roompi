<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoalPaketCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
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
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 801],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 801],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 801],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 801],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 802],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 802],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 802],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 802],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 803],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 803],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 803],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 803],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 804],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 804],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 804],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 804],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 805],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 805],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 805],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 805],
        ];

        $pilihanBagian1Level2 = [
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 806],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 806],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 806],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 806],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 807],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 807],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 807],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 807],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 808],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 808],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 808],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 808],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 809],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 809],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 809],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 809],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 810],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 810],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 810],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 810],
        ];

        $pilihanBagian1Level3 = [
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 811],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 811],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 811],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 811],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 812],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 812],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 812],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 812],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 813],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 813],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 813],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 813],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 814],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 814],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 814],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 814],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 815],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 815],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 815],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 815],
        ];

        $pilihanBagian1Level4 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 816],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 816],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 816],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 816],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 817],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 817],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 817],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 817],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 818],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 818],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 818],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 818],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 819],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 819],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 819],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 819],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 820],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 820],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 820],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 820],
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
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 821],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 821],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 821],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 821],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 822],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 822],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 822],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 822],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 823],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 823],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 823],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 823],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 824],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 824],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 824],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 824],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 825],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 825],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 825],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 825],
        ];

        $pilihanBagian2Level2 = [
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 826],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 826],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 826],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 826],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 827],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 827],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 827],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 827],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 828],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 828],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 828],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 828],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 829],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 829],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 829],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 829],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 830],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 830],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 830],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 830],
        ];

        $pilihanBagian2Level3 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 831],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 831],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 831],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 831],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 832],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 832],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 832],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 832],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 833],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 833],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 833],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 833],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 834],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 834],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 834],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 834],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 835],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 835],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 835],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 835],
        ];

        $pilihanBagian2Level4 = [
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 836],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 836],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 836],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 836],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 837],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 837],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 837],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 837],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 838],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 838],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 838],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 838],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 839],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 839],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 839],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 839],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 840],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 840],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 840],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 840],
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
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 841],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 841],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 841],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 841],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 842],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 842],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 842],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 842],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 843],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 843],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 843],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 843],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 844],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 844],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 844],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 844],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 845],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 845],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 845],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 845],
        ];

        $pilihanBagian3Level2 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 846],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 846],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 846],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 846],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 847],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 847],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 847],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 847],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 848],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 848],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 848],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 848],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 849],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 849],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 849],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 849],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 850],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 850],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 850],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 850],
        ];

        $pilihanBagian3Level3 = [
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 851],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 851],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 851],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 851],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 852],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 852],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 852],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 852],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 853],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 853],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 853],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 853],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 854],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 854],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 854],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 854],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 855],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 855],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 855],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 855],
        ];

        $pilihanBagian3Level4 = [
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 856],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 856],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 856],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 856],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 857],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 857],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 857],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 857],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 858],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 858],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 858],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 858],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 859],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 859],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 859],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 859],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 860],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 860],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 860],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 860],
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
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 861],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 861],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 861],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 861],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 862],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 862],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 862],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 862],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 863],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 863],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 863],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 863],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 864],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 864],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 864],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 864],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 865],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 865],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 865],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 865],
        ];

        $pilihanBagian4Level2 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 866],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 866],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 866],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 866],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 867],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 867],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 867],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 867],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 868],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 868],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 868],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 868],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 869],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 869],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 869],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 869],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 870],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 870],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 870],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 870],
        ];

        $pilihanBagian4Level3 = [
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 871],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 871],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 871],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 871],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 872],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 872],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 872],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 872],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 873],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 873],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 873],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 873],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 874],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 874],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 874],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 874],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 875],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 875],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 875],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 875],
        ];

        $pilihanBagian4Level4 = [
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 876],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 876],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 876],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 876],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 877],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 877],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 877],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 877],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 878],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 878],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 878],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 878],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 879],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 879],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 879],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 879],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 880],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 880],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 880],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 880],
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
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 881],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 881],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 881],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 881],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 882],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 882],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 882],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 882],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 883],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 883],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 883],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 883],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 884],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 884],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 884],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 884],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 885],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 885],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 885],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 885],
        ];

        $pilihanBagian1Level2 = [
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 886],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 886],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 886],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 886],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 887],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 887],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 887],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 887],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 888],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 888],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 888],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 888],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 889],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 889],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 889],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 889],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 890],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 890],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 890],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 890],
        ];

        $pilihanBagian1Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 891],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 891],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 891],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 891],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 892],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 892],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 892],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 892],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 893],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 893],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 893],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 893],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 894],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 894],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 894],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 894],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 895],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 895],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 895],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 895],
        ];

        $pilihanBagian1Level4 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 896],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 896],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 896],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 896],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 897],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 897],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 897],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 897],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 898],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 898],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 898],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 898],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 899],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 899],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 899],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 899],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 900],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 900],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 900],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 900],
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
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 901],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 901],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 901],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 901],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 902],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 902],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 902],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 902],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 903],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 903],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 903],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 903],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 904],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 904],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 904],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 904],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 905],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 905],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 905],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 905],
        ];

        $pilihanBagian2Level2 = [
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 906],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 906],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 906],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 906],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 907],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 907],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 907],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 907],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 908],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 908],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 908],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 908],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 909],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 909],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 909],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 909],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 910],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 910],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 910],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 910],
        ];

        $pilihanBagian2Level3 = [
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 911],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 911],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 911],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 911],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 912],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 912],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 912],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 912],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 913],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 913],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 913],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 913],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 914],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 914],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 914],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 914],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 915],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 915],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 915],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 915],
        ];

        $pilihanBagian2Level4 = [
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 916],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 916],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 916],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 916],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 917],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 917],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 917],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 917],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 918],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 918],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 918],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 918],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 919],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 919],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 919],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 919],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 920],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 920],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 920],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 920],
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
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 921],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 921],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 921],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 921],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 922],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 922],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 922],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 922],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 923],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 923],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 923],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 923],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 924],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 924],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 924],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 924],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 925],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 925],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 925],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 925],
        ];

        $pilihanBagian3Level2 = [
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 926],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 926],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 926],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 926],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 927],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 927],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 927],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 927],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 928],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 928],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 928],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 928],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 929],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 929],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 929],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 929],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 930],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 930],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 930],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 930],
        ];

        $pilihanBagian3Level3 = [
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 931],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 931],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 931],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 931],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 932],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 932],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 932],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 932],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 933],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 933],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 933],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 933],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 934],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 934],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 934],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 934],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 935],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 935],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 935],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 935],
        ];

        $pilihanBagian3Level4 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 936],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 936],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 936],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 936],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 937],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 937],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 937],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 937],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 938],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 938],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 938],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 938],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 939],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 939],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 939],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 939],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 940],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 940],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 940],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 940],
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
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 941],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 941],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 941],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 941],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 942],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 942],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 942],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 942],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 943],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 943],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 943],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 943],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 944],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 944],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 944],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 944],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 945],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 945],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 945],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 945],
        ];

        $pilihanBagian4Level2 = [
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 946],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 946],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 946],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 946],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 947],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 947],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 947],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 947],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 948],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 948],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 948],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 948],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 949],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 949],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 949],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 949],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 950],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 950],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 950],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 950],
        ];

        $pilihanBagian4Level3 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 951],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 951],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 951],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 951],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 952],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 952],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 952],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 952],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 953],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 953],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 953],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 953],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 954],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 954],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 954],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 954],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 955],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 955],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 955],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 955],
        ];

        $pilihanBagian4Level4 = [
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 956],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 956],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 956],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 956],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 957],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 957],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 957],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 957],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 958],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 958],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 958],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 958],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 959],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 959],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 959],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 959],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 960],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 960],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 960],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 960],
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
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 961],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 961],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 961],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 961],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 962],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 962],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 962],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 962],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 963],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 963],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 963],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 963],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 964],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 964],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 964],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 964],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 965],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 965],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 965],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 965],
        ];

        $pilihanBagian1Level2 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 966],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 966],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 966],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 966],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 967],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 967],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 967],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 967],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 968],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 968],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 968],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 968],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 969],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 969],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 969],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 969],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 970],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 970],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 970],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 970],
        ];

        $pilihanBagian1Level3 = [
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 971],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 971],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 971],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 971],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 972],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 972],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 972],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 972],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 973],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 973],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 973],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 973],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 974],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 974],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 974],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 974],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 975],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 975],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 975],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 975],
        ];

        $pilihanBagian1Level4 = [
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 976],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 976],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 976],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 976],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 977],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 977],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 977],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 977],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 978],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 978],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 978],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 978],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 979],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 979],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 979],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 979],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 980],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 980],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 980],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 980],
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
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 981],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 981],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 981],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 981],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 982],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 982],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 982],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 982],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 983],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 983],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 983],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 983],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 984],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 984],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 984],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 984],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 985],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 985],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 985],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 985],
        ];

        $pilihanBagian2Level2 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 986],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 986],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 986],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 986],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 987],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 987],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 987],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 987],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 988],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 988],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 988],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 988],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 989],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 989],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 989],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 989],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 990],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 990],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 990],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 990],
        ];

        $pilihanBagian2Level3 = [
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 991],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 991],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 991],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 991],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 992],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 992],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 992],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 992],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 993],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 993],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 993],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 993],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 994],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 994],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 994],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 994],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 995],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 995],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 995],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 995],
        ];

        $pilihanBagian2Level4 = [
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 996],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 996],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 996],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 996],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 997],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 997],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 997],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 997],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 998],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 998],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 998],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 998],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 999],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 999],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 999],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 999],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 1000],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 1000],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 1000],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 1000],
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
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 1001],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 1001],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 1001],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 1001],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 1002],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 1002],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 1002],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 1002],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 1003],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 1003],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1003],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 1003],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 1004],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 1004],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 1004],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 1004],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1005],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1005],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1005],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1005],
        ];

        $pilihanBagian3Level2 = [
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1006],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1006],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1006],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1006],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1007],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1007],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1007],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1007],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1008],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1008],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1008],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1008],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 1009],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 1009],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 1009],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 1009],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 1010],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 1010],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 1010],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 1010],
        ];

        $pilihanBagian3Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1011],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1011],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1011],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1011],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1012],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1012],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1012],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1012],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1013],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1013],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1013],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1013],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1014],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1014],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1014],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1014],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 1015],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 1015],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 1015],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 1015],
        ];

        $pilihanBagian3Level4 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 1016],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 1016],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 1016],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 1016],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 1017],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 1017],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 1017],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 1017],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 1018],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 1018],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 1018],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 1018],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 1019],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 1019],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 1019],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 1019],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 1020],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 1020],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 1020],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 1020],
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
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1021],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 1021],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 1021],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 1021],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 1022],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 1022],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 1022],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 1022],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 1023],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 1023],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 1023],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 1023],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 1024],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 1024],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 1024],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 1024],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 1025],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 1025],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 1025],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 1025],
        ];

        $pilihanBagian4Level2 = [
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 1026],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 1026],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 1026],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 1026],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 1027],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 1027],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1027],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 1027],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 1028],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 1028],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 1028],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 1028],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1029],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1029],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1029],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1029],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1030],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1030],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1030],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1030],
        ];

        $pilihanBagian4Level3 = [
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1031],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1031],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1031],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1031],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1032],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1032],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1032],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1032],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 1033],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 1033],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 1033],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 1033],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 1034],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 1034],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 1034],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 1034],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1035],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1035],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1035],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1035],
        ];

        $pilihanBagian4Level4 = [
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1036],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1036],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1036],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1036],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1037],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1037],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1037],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1037],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1038],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1038],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1038],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1038],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 1039],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 1039],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 1039],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 1039],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 1040],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 1040],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 1040],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 1040],
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
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 1041],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 1041],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 1041],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 1041],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 1042],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 1042],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 1042],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 1042],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 1043],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 1043],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 1043],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 1043],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 1044],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 1044],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 1044],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 1044],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1045],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 1045],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 1045],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 1045],
        ];

        $pilihanBagian1Level2 = [
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 1046],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 1046],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 1046],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 1046],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 1047],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 1047],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 1047],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 1047],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 1048],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 1048],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 1048],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 1048],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 1049],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 1049],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 1049],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 1049],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 1050],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 1050],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 1050],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 1050],
        ];

        $pilihanBagian1Level3 = [
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 1051],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 1051],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1051],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 1051],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 1052],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 1052],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 1052],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 1052],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1053],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1053],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1053],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1053],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1054],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1054],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1054],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1054],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1055],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1055],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1055],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1055],
        ];

        $pilihanBagian1Level4 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1056],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1056],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1056],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1056],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 1057],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 1057],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 1057],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 1057],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 1058],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 1058],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 1058],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 1058],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1059],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1059],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1059],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1059],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1060],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1060],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1060],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1060],
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
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1061],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1061],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1061],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1061],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1062],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1062],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1062],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1062],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 1063],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 1063],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 1063],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 1063],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 1064],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 1064],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 1064],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 1064],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 1065],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 1065],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 1065],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 1065],
        ];

        $pilihanBagian2Level2 = [
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 1066],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 1066],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 1066],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 1066],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 1067],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 1067],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 1067],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 1067],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 1068],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 1068],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 1068],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 1068],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1069],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 1069],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 1069],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 1069],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 1070],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 1070],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 1070],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 1070],
        ];

        $pilihanBagian2Level3 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 1071],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 1071],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 1071],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 1071],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 1072],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 1072],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 1072],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 1072],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 1073],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 1073],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 1073],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 1073],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 1074],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 1074],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 1074],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 1074],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 1075],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 1075],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1075],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 1075],
        ];
        
        $pilihanBagian2Level4 = [
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 1076],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 1076],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 1076],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 1076],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1077],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1077],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1077],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1077],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1078],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1078],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1078],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1078],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1079],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1079],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1079],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1079],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1080],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1080],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1080],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1080],
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
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 1081],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 1081],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 1081],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 1081],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 1082],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 1082],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 1082],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 1082],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1083],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1083],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1083],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1083],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1084],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1084],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1084],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1084],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1085],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1085],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1085],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1085],
        ];
        
        $pilihanBagian3Level2 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1086],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1086],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1086],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1086],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 1087],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 1087],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 1087],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 1087],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 1088],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 1088],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 1088],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 1088],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 1089],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 1089],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 1089],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 1089],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 1090],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 1090],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 1090],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 1090],
        ];
        
        $pilihanBagian3Level3 = [
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 1091],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 1091],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 1091],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 1091],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 1092],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 1092],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 1092],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 1092],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1093],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 1093],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 1093],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 1093],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 1094],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 1094],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 1094],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 1094],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 1095],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 1095],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 1095],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 1095],
        ];
        
        $pilihanBagian3Level4 = [
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 1096],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 1096],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 1096],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 1096],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 1097],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 1097],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 1097],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 1097],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 1098],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 1098],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 1098],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 1098],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 1099],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 1099],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1099],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 1099],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 1100],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 1100],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 1100],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 1100],
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
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1101],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1101],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1101],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1101],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1102],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1102],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1102],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1102],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1103],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1103],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1103],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1103],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1104],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1104],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1104],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1104],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 1105],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 1105],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 1105],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 1105],
        ];
        
        $pilihanBagian4Level2 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 1106],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 1106],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 1106],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 1106],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1107],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1107],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1107],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1107],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1108],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1108],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1108],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1108],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1109],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1109],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1109],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1109],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1110],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1110],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1110],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1110],
        ];
        
        $pilihanBagian4Level3 = [
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 1111],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 1111],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 1111],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 1111],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 1112],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 1112],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 1112],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 1112],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 1113],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 1113],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 1113],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 1113],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 1114],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 1114],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 1114],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 1114],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 1115],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 1115],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 1115],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 1115],
        ];
        
        $pilihanBagian4Level4 = [
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 1116],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 1116],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 1116],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 1116],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1117],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 1117],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 1117],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 1117],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 1118],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 1118],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 1118],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 1118],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 1119],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 1119],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 1119],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 1119],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 1120],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 1120],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 1120],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 1120],
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
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 1121],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 1121],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 1121],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 1121],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 1122],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 1122],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 1122],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 1122],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 1123],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 1123],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1123],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 1123],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 1124],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 1124],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 1124],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 1124],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1125],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1125],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1125],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1125],
        ];
        
        $pilihanBagian1Level2 = [
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1126],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1126],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1126],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1126],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1127],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1127],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1127],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1127],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1128],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1128],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1128],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1128],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 1129],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 1129],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 1129],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 1129],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 1130],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 1130],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 1130],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 1130],
        ];
        
        $pilihanBagian1Level3 = [
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1131],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1131],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1131],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1131],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1132],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1132],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1132],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1132],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1133],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1133],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1133],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1133],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1134],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1134],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1134],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1134],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 1135],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 1135],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 1135],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 1135],
        ];
        
        $pilihanBagian1Level4 = [
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 1136],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 1136],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 1136],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 1136],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 1137],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 1137],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 1137],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 1137],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 1138],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 1138],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 1138],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 1138],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 1139],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 1139],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 1139],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 1139],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 1140],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 1140],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 1140],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 1140],
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
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1141],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 1141],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 1141],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 1141],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 1142],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 1142],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 1142],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 1142],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 1143],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 1143],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 1143],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 1143],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 1144],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 1144],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 1144],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 1144],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 1145],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 1145],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 1145],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 1145],
        ];
        
        $pilihanBagian2Level2 = [
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 1146],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 1146],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 1146],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 1146],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 1147],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 1147],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1147],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 1147],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 1148],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 1148],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 1148],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 1148],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1149],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1149],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1149],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1149],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1150],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1150],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1150],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1150],
        ];
        
        $pilihanBagian2Level3 = [
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1151],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1151],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1151],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1151],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1152],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1152],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1152],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1152],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 1153],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 1153],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 1153],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 1153],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 1154],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 1154],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 1154],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 1154],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1155],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1155],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1155],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1155],
        ];
        
        $pilihanBagian2Level4 = [
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1156],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1156],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1156],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1156],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1157],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1157],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1157],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1157],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1158],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1158],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1158],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1158],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 1159],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 1159],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 1159],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 1159],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 1160],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 1160],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 1160],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 1160],
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
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 1161],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 1161],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 1161],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 1161],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 1162],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 1162],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 1162],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 1162],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 1163],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 1163],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 1163],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 1163],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 1164],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 1164],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 1164],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 1164],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1165],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 1165],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 1165],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 1165],
        ];
        
        $pilihanBagian3Level2 = [
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 1166],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 1166],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 1166],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 1166],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 1167],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 1167],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 1167],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 1167],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 1168],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 1168],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 1168],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 1168],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 1169],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 1169],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 1169],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 1169],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 1170],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 1170],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 1170],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 1170],
        ];
        
        $pilihanBagian3Level3 = [
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 1171],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 1171],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1171],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 1171],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 1172],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 1172],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 1172],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 1172],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1173],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1173],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1173],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1173],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1174],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1174],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1174],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1174],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1175],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1175],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1175],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1175],
        ];
        
        $pilihanBagian3Level4 = [
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1176],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1176],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1176],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1176],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 1177],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 1177],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 1177],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 1177],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 1178],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 1178],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 1178],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 1178],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1179],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1179],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1179],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1179],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1180],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1180],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1180],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1180],
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
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1181],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1181],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1181],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1181],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1182],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1182],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1182],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1182],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 1183],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 1183],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 1183],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 1183],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 1184],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 1184],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 1184],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 1184],
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 1185],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 1185],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 1185],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 1185],
        ];

        $pilihanBagian4Level2 = [
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 1186],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 1186],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 1186],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 1186],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 1187],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 1187],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 1187],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 1187],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 1188],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 1188],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 1188],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 1188],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1189],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 1189],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 1189],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 1189],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 1190],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 1190],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 1190],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 1190],
        ];
        
        $pilihanBagian4Level3 = [
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 1191],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 1191],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 1191],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 1191],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 1192],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 1192],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 1192],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 1192],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 1193],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 1193],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 1193],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 1193],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 1194],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 1194],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 1194],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 1194],
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 1195],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 1195],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 1195],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 1195],
        ];
        
        $pilihanBagian4Level4 = [
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 1196],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 1196],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 1196],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 1196],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 1197],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 1197],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 1197],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 1197],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 1198],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 1198],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 1198],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 1198],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 1199],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 1199],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 1199],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 1199],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 1200],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 1200],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 1200],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 1200],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian4Level1, $pilihanBagian4Level2, $pilihanBagian4Level3, $pilihanBagian4Level4));
    }
}
