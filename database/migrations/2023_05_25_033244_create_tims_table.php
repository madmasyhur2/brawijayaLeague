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
            $table->id();
            $table->string('logo_tim');
            $table->string('nama_tim');
            $table->integer('pos');
            $table->integer('poin');
            $table->integer('menang');
            $table->integer('seri');
            $table->integer('kalah');
            $table->integer('gol');
            $table->integer('kebobolan');
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
