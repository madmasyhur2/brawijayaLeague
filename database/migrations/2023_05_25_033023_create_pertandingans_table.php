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
            // $table-> unsignedBigInteger('home_id');
            // $table-> unsignedBigInteger('away_id');
            $table->string('home_tim');
            $table->string('logo_home_tim');
            // $table->foreign('home_id')->references('id')->on('tims'); 
            // $table->foreign('away_id')->references('id')->on('tims');
            $table->string('away_tim');
            $table->string('logo_away_tim');
            $table->integer('matchday');
            // $table->datetime('tanggal');
            $table->string('tanggal');
            $table->string('jam');
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
