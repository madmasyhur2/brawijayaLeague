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
            "logo_tim" => "team1.svg",
            "nama_tim" => "Pertanian",
            "menang"=> 10,
            "seri" => 10,
            "kalah" => 10,
            "gol" => 10,
            "kebobolan" => 30,
        ]);

        Tim::create([
            "logo_tim" => "team2.svg",
            "nama_tim" => "Peternakan",
            "menang"=> 30,
            "seri" => 0,
            "kalah" => 8,
            "gol" => 100,
            "kebobolan" => 10,
        ]);

        Tim::create([
            'logo_tim' => 'team3.svg',
            'nama_tim' => 'Teknik_1',
            'menang' => 25,
            'seri' => 5,
            'kalah' => 4,
            'gol' => 80,
            'kebobolan' => 30,
        ]);

        Tim::create([
            'logo_tim' => 'team4.svg',
            'nama_tim' => 'Teknik_2',
            'menang' => 20,
            'seri' => 10,
            'kalah' => 4,
            'gol' => 65,
            'kebobolan' => 35,
        ]);

        Tim::create([
            'logo_tim' => 'team5.svg',
            'nama_tim' => 'Kedokteran',
            'menang' => 18,
            'seri' => 14,
            'kalah' => 4,
            'gol' => 60,
            'kebobolan' => 25,
        ]);

        Tim::create([
            'logo_tim' => 'team6.svg',
            'nama_tim' => 'FPIK',
            'menang' => 28,
            'seri' => 6,
            'kalah' => 4,
            'gol' => 85,
            'kebobolan' => 40,
        ]);

        Tim::create([
            'logo_tim' => 'team7.svg',
            'nama_tim' => 'Tek Pertanian',
            'menang' => 24,
            'seri' => 8,
            'kalah' => 6,
            'gol' => 75,
            'kebobolan' => 35,
        ]);

        Tim::create([
            'logo_tim' => 'team8.svg',
            'nama_tim' => 'FKH',
            'menang' => 22,
            'seri' => 12,
            'kalah' => 4,
            'gol' => 70,
            'kebobolan' => 30,
        ]);

        Tim::create([
            'logo_tim' => 'team9.svg',
            'nama_tim' => 'FILKOM_1',
            'menang' => 26,
            'seri' => 7,
            'kalah' => 5,
            'gol' => 80,
            'kebobolan' => 35,
        ]);

        Tim::create([
            "logo_tim" => "team10.svg",
            "nama_tim" => "FILKOM_2",
            "menang"=> 10,
            "seri" => 10,
            "kalah" => 10,
            "gol" => 10,
            "kebobolan" => 30,
        ]);

        Tim::create([
            "logo_tim" => "team11.svg",
            "nama_tim" => "FKG",
            "menang"=> 30,
            "seri" => 0,
            "kalah" => 8,
            "gol" => 100,
            "kebobolan" => 10,
        ]);

        Tim::create([
            'logo_tim' => 'team12.svg',
            'nama_tim' => 'PSDKU Kediri',
            'menang' => 25,
            'seri' => 5,
            'kalah' => 4,
            'gol' => 80,
            'kebobolan' => 30,
        ]);

        Tim::create([
            'logo_tim' => 'team1.svg',
            'nama_tim' => 'Hukum_1',
            'menang' => 20,
            'seri' => 10,
            'kalah' => 4,
            'gol' => 65,
            'kebobolan' => 35,
        ]);

        Tim::create([
            'logo_tim' => 'team2.svg',
            'nama_tim' => 'Hukum_2',
            'menang' => 18,
            'seri' => 14,
            'kalah' => 4,
            'gol' => 60,
            'kebobolan' => 25,
        ]);

        Tim::create([
            'logo_tim' => 'team3.svg',
            'nama_tim' => 'FEB_1',
            'menang' => 28,
            'seri' => 6,
            'kalah' => 4,
            'gol' => 85,
            'kebobolan' => 40,
        ]);

        Tim::create([
            'logo_tim' => 'team4.svg',
            'nama_tim' => 'FEB_2',
            'menang' => 24,
            'seri' => 8,
            'kalah' => 6,
            'gol' => 75,
            'kebobolan' => 35,
        ]);

        Tim::create([
            'logo_tim' => 'team5.svg',
            'nama_tim' => 'FIA_1',
            'menang' => 22,
            'seri' => 12,
            'kalah' => 4,
            'gol' => 70,
            'kebobolan' => 30,
        ]);

        Tim::create([
            'logo_tim' => 'team6.svg',
            'nama_tim' => 'FIA_2',
            'menang' => 26,
            'seri' => 7,
            'kalah' => 5,
            'gol' => 80,
            'kebobolan' => 35,
        ]);

        Tim::create([
            "logo_tim" => "team7.svg",
            "nama_tim" => "FISIP",
            "menang"=> 10,
            "seri" => 10,
            "kalah" => 10,
            "gol" => 10,
            "kebobolan" => 30,
        ]);

        Tim::create([
            "logo_tim" => "team8.svg",
            "nama_tim" => "FIB",
            "menang"=> 30,
            "seri" => 0,
            "kalah" => 8,
            "gol" => 100,
            "kebobolan" => 10,
        ]);
    }
}
