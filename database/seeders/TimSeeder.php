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
            // "pos" => 10,
            "logo_tim" => "logotim.svg",
            "nama_tim" => "Chelsea",
            "poin" => 40,
            'game' => 38,
            "menang"=> 10,
            "seri" => 10,
            "kalah" => 10,
            "gol" => 10,
            "kebobolan" => 30,
            'gd' => -20
        ]);

        Tim::create([
            // "pos" => 1,
            "logo_tim" => "logo_manchester_united.jpg",
            "nama_tim" => "Man United",
            "poin" => 90,
            'game' => 38,
            "menang"=> 30,
            "seri" => 0,
            "kalah" => 8,
            "gol" => 100,
            "kebobolan" => 10,
            'gd' => 90
        ]);

        Tim::create([
            // 'pos' => 1,
            'logo_tim' => 'logo_manchester_city.jpg',
            'nama_tim' => 'Man City',
            'poin' => 80,
            'game' => 38,
            'menang' => 25,
            'seri' => 5,
            'kalah' => 4,
            'gol' => 80,
            'kebobolan' => 30,
            'gd' => 50
        ]);

        Tim::create([
            // 'pos' => 2,
            'logo_tim' => 'logo_arsenal.jpg',
            'nama_tim' => 'Arsenal',
            'poin' => 70,
            'game' => 38,
            'menang' => 20,
            'seri' => 10,
            'kalah' => 4,
            'gol' => 65,
            'kebobolan' => 35,
            'gd' => 30
        ]);

        Tim::create([
            // 'pos' => 3,
            'logo_tim' => 'logo_liverpool.jpg',
            'nama_tim' => 'Liverpool',
            'poin' => 68,
            'game' => 38,
            'menang' => 18,
            'seri' => 14,
            'kalah' => 4,
            'gol' => 60,
            'kebobolan' => 25,
            'gd' => 35
        ]);

        Tim::create([
            // 'pos' => 1,
            'logo_tim' => 'logo_acmilan.jpg',
            'nama_tim' => 'AC Milan',
            'poin' => 90,
            'game' => 38,
            'menang' => 28,
            'seri' => 6,
            'kalah' => 4,
            'gol' => 85,
            'kebobolan' => 40,
            'gd' => 45
        ]);

        Tim::create([
            // 'pos' => 2,
            'logo_tim' => 'logo_intermilan.jpg',
            'nama_tim' => 'Inter Milan',
            'poin' => 80,
            'game' => 38,
            'menang' => 24,
            'seri' => 8,
            'kalah' => 6,
            'gol' => 75,
            'kebobolan' => 35,
            'gd' => 40
        ]);

        Tim::create([
            // 'pos' => 3,
            'logo_tim' => 'logo_juventus.jpg',
            'nama_tim' => 'Juventus',
            'poin' => 78,
            'game' => 38,
            'menang' => 22,
            'seri' => 12,
            'kalah' => 4,
            'gol' => 70,
            'kebobolan' => 30,
            'gd' => 40
        ]);

        Tim::create([
            // 'pos' => 4,
            'logo_tim' => 'logo_galatasaray.jpg',
            'nama_tim' => 'Galatasaray',
            'poin' => 85,
            'game' => 38,
            'menang' => 26,
            'seri' => 7,
            'kalah' => 5,
            'gol' => 80,
            'kebobolan' => 35,
            'gd' => 55
        ]);

        Tim::create([
            // "pos" => 10,
            "logo_tim" => "logo_chelsea.jpg",
            "nama_tim" => "Chelsea",
"poin" => 40,
            'game' => 38,
            "menang"=> 10,
            "seri" => 10,
            "kalah" => 10,
            "gol" => 10,
            "kebobolan" => 30,
            'gd' => -20
        ]);

        Tim::create([
            // "pos" => 1,
            "logo_tim" => "logo_manchester_united.jpg",
            "nama_tim" => "Man United",
"poin" => 90,
            'game' => 38,
            "menang"=> 30,
            "seri" => 0,
            "kalah" => 8,
            "gol" => 100,
            "kebobolan" => 10,
            'gd' => 90
        ]);

        Tim::create([
            // 'pos' => 1,
            'logo_tim' => 'logo_manchester_city.jpg',
            'nama_tim' => 'Man City',
            'poin' => 80,
            'game' => 38,
            'menang' => 25,
            'seri' => 5,
            'kalah' => 4,
            'gol' => 80,
            'kebobolan' => 30,
            'gd' => 50
        ]);

        Tim::create([
            // 'pos' => 2,
            'logo_tim' => 'logo_arsenal.jpg',
            'nama_tim' => 'Arsenal',
            'poin' => 70,
            'game' => 38,
            'menang' => 20,
            'seri' => 10,
            'kalah' => 4,
            'gol' => 65,
            'kebobolan' => 35,
            'gd' => 30
        ]);

        Tim::create([
            // 'pos' => 3,
            'logo_tim' => 'logo_liverpool.jpg',
            'nama_tim' => 'Liverpool',
            'poin' => 68,
            'game' => 38,
            'menang' => 18,
            'seri' => 14,
            'kalah' => 4,
            'gol' => 60,
            'kebobolan' => 25,
            'gd' => 35
        ]);

        Tim::create([
            // 'pos' => 1,
            'logo_tim' => 'logo_acmilan.jpg',
            'nama_tim' => 'AC Milan',
            'poin' => 90,
            'game' => 38,
            'menang' => 28,
            'seri' => 6,
            'kalah' => 4,
            'gol' => 85,
            'kebobolan' => 40,
            'gd' => 45
        ]);

        Tim::create([
            // 'pos' => 2,
            'logo_tim' => 'logo_intermilan.jpg',
            'nama_tim' => 'Inter Milan',
            'poin' => 80,
            'game' => 38,
            'menang' => 24,
            'seri' => 8,
            'kalah' => 6,
            'gol' => 75,
            'kebobolan' => 35,
            'gd' => 40
        ]);

        Tim::create([
            // 'pos' => 3,
            'logo_tim' => 'logo_juventus.jpg',
            'nama_tim' => 'Juventus',
            'poin' => 78,
            'game' => 38,
            'menang' => 22,
            'seri' => 12,
            'kalah' => 4,
            'gol' => 70,
            'kebobolan' => 30,
            'gd' => 40
        ]);

        Tim::create([
            // 'pos' => 4,
            'logo_tim' => 'logo_galatasaray.jpg',
            'nama_tim' => 'Galatasaray',
            'poin' => 85,
            'game' => 38,
            'menang' => 26,
            'seri' => 7,
            'kalah' => 5,
            'gol' => 80,
            'kebobolan' => 35,
            'gd' => 55
        ]);

        Tim::create([
            // "pos" => 10,
            "logo_tim" => "logo_chelsea.jpg",
            "nama_tim" => "Chelsea",
            "poin" => 40,
            'game' => 38,
            "menang"=> 10,
            "seri" => 10,
            "kalah" => 10,
            "gol" => 10,
            "kebobolan" => 30,
            'gd' => -20
        ]);

        Tim::create([
            // "pos" => 1,
            "logo_tim" => "logo_manchester_united.jpg",
            "nama_tim" => "Man United",
            "poin" => 90,
            'game' => 38,
            "menang"=> 30,
            "seri" => 0,
            "kalah" => 8,
            "gol" => 100,
            "kebobolan" => 10,
            'gd' => 90
        ]);
    }
}
