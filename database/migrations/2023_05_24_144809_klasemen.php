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
        Schema::create('klasemen', function (Blueprint $table) {
            $table->id();
            $table->integer('pos');
            $table->string('nama_tim');
            $table->integer('game');
            $table->integer('poin');
            $table->integer('menang');
            $table->integer('seri');
            $table->integer('kalah');
            $table->integer('gd');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klasemen');
    }
};
