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
<<<<<<< HEAD
            $table->id()->primary;
            $table->string('logo_tim')->nullable();
            $table->string('nama_tim')->unique;
=======
            $table->id();
            $table->string('logo_tim');
            $table->string('nama_tim');
>>>>>>> c962881e29e9131b3da1313003b0bf6c1893520b
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
