<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('soal', function (Blueprint $table) {
            $table->id();
            $table->string('pertanyaan');
            $table->unsignedBigInteger('sub_bagian_id');
            $table->unsignedBigInteger('paket_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('sub_bagian_id')->references('id')->on('sub_bagian')->onDelete('cascade');
            $table->foreign('paket_id')->references('id')->on('paket_kesetaraan')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soal');
    }
};
