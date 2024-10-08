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
        Schema::create('remaja', function (Blueprint $table) {
            $table->id();
            $table->string('nama_orang_tua')->nullable();
            $table->bigInteger('exp')->default(0);
            $table->bigInteger('star')->default(0);
            $table->bigInteger('level')->default(0);
            $table->string('kode_orang_tua')->nullable();
            $table->integer('user_id');
            $table->string('username');
            $table->integer('orang_tua_id')->nullable();
            $table->integer('activity_id');
            $table->integer('paket_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remaja');
    }
};
