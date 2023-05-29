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
        Schema::create('hasil_pertandingans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tim_a');
            $table->integer('skor_a')->nullable();
            $table->string('nama_tim_b');
            $table->integer('skor_b')->nullable();
            $table->integer('matchday');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_pertandingans');
    }
};
