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
        Schema::create('hasil_pertandingan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tim_a');
            $table->integer('skor_a');
            $table->string('nama_tim_b');
            $table->integer('skor_b');
            $table->integer('matchday');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_pertandingan');
    }
};
