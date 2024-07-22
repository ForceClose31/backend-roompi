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

        Schema::create('sub_bagian', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sub_bagian');
            $table->bigInteger('nilai_maks');
            $table->unsignedBigInteger('bagian_id');
            $table->timestamps();
            $table->foreign('bagian_id')->references('id')->on('bagian')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_bagian');
    }
};
