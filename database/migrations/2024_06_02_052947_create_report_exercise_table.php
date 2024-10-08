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
        Schema::create('report_exercise', function (Blueprint $table) {
            $table->id();
            $table->integer('remaja_id');
            $table->integer('bagian_id');
            $table->integer('sub_bagian_id');
            $table->integer('activity_id');
            $table->integer('category_id');
            $table->integer('paket_id');
            $table->integer('nilai');
            $table->boolean('completed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_exercise');
    }
};
