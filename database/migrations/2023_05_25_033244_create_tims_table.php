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
        Schema::create('tims', function (Blueprint $table) {
            $table->id()->primary;
            $table->integer('pos');
            $table->string('logo_tim');
            $table->string('nama_tim')->unique;
            $table->integer('poin');
            $table->integer('game');
            $table->integer('menang');
            $table->integer('seri');
            $table->integer('kalah');
            $table->integer('gol');
            $table->integer('kebobolan');
            $table->integer('gd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tims');
    }
};
