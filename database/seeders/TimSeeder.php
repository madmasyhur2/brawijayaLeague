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
            "logo_tim" => "path/logo_chelsea.jpg",
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
            "logo_tim" => "path/logo_manchester_united.jpg",
            "nama_tim" => "Manchester United",
            "pos" => 1,
            "poin" => 90,
            "menang"=> 30,
            "seri" => 0,
            "kalah" => 8,
            "gol" => 0,
            "kebobolan" => 10,
        ]);

        Tim::create([
            'logo_tim' => 'path/logo_manchester_city.jpg',
            'nama_tim' => 'Manchester City',
            'pos' => 1,
            'poin' => 80,
            'menang' => 25,
            'seri' => 5,
            'kalah' => 4,
            'gol' => 80,
            'kebobolan' => 30,
        ]);

        Tim::create([
            'logo_tim' => 'path/logo_arsenal.jpg',
            'nama_tim' => 'Arsenal',
            'pos' => 2,
            'poin' => 70,
            'menang' => 20,
            'seri' => 10,
            'kalah' => 4,
            'gol' => 65,
            'kebobolan' => 35,
        ]);

        Tim::create([
            'logo_tim' => 'path/logo_liverpool.jpg',
            'nama_tim' => 'Liverpool',
            'pos' => 3,
            'poin' => 68,
            'menang' => 18,
            'seri' => 14,
            'kalah' => 4,
            'gol' => 60,
            'kebobolan' => 25,
        ]);

        Tim::create([
            'logo_tim' => 'path/logo_acmilan.jpg',
            'nama_tim' => 'AC Milan',
            'pos' => 1,
            'poin' => 90,
            'menang' => 28,
            'seri' => 6,
            'kalah' => 4,
            'gol' => 85,
            'kebobolan' => 40,
        ]);

        Tim::create([
            'logo_tim' => 'path/logo_intermilan.jpg',
            'nama_tim' => 'Inter Milan',
            'pos' => 2,
            'poin' => 80,
            'menang' => 24,
            'seri' => 8,
            'kalah' => 6,
            'gol' => 75,
            'kebobolan' => 35,
        ]);

        Tim::create([
            'logo_tim' => 'path/logo_juventus.jpg',
            'nama_tim' => 'Juventus',
            'pos' => 3,
            'poin' => 78,
            'menang' => 22,
            'seri' => 12,
            'kalah' => 4,
            'gol' => 70,
            'kebobolan' => 30,
        ]);

        Tim::create([
            'logo_tim' => 'path/logo_galatasaray.jpg',
            'nama_tim' => 'Galatasaray',
            'pos' => 1,
            'poin' => 85,
            'menang' => 26,
            'seri' => 7,
            'kalah' => 3,
            'gol' => 80,
            'kebobolan' => 35,
        ]);
    }
}
