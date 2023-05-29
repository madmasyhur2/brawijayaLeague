<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tim;

class TimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tim::create([
            "logo_tim" => "logo.jpg",
            "nama_tim" => "chelsea",
            "pos" => 10,
            "poin" => 40,
            "menang"=> 10,
            "seri" => 10,
            "kalah" => 10,
            "gol" => 30,
            "kebobolan" => 10,
        ]);

        Tim::create([
            "logo_tim" => "logo1.jpg",
            "nama_tim" => "Manchester United",
            "pos" => 1,
            "poin" => 90,
            "menang"=> 30,
            "seri" => 0,
            "kalah" => 8,
            "gol" => 90,
            "kebobolan" => 20,
        ]);
    }
}
