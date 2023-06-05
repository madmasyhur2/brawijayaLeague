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
        Schema::create('pertandingans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_id');
            $table->foreignId('away_id');
            // $table->string('home_tim');
            // $table->string('logo_home_tim')->nullable(true);
            // $table->string('away_tim');
            // $table->string('logo_away_tim')->nullable(true);
            $table->integer('matchday');
            $table->string('tanggal');
            // $table->string('jam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertandingans');
    }
};
