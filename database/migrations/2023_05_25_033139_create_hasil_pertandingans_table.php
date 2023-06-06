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
            $table->foreignId('pertandingans_id');
            $table->string('gambar')->nullable();
            $table->integer('skor_home')->nullable();
            $table->integer('skor_away')->nullable();
            $table->timestamps();
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
