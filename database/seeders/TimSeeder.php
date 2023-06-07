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
            "menang"=> 28,
            "seri" => 5,
            "kalah" => 5,
            "gol" => 94,
            "kebobolan" => 33,
        ]);

        Tim::create([
            "logo_tim" => "team2.svg",
            "nama_tim" => "Peternakan",
            "menang"=> 26,
            "seri" => 6,
            "kalah" => 6,
            "gol" => 88,
            "kebobolan" => 43,
        ]);

        Tim::create([
            'logo_tim' => 'team3.svg',
            'nama_tim' => 'Teknik_1',
            'menang' => 23,
            'seri' => 6,
            'kalah' => 9,
            'gol' => 58,
            'kebobolan' => 43,
        ]);

        Tim::create([
            'logo_tim' => 'team4.svg',
            'nama_tim' => 'Teknik_2',
            'menang' => 19,
            'seri' => 14,
            'kalah' => 5,
            'gol' => 68,
            'kebobolan' => 33,
        ]);

        Tim::create([
            'logo_tim' => 'team5.svg',
            'nama_tim' => 'Kedokteran',
            'menang' => 19,
            'seri' => 10,
            'kalah' => 9,
            'gol' => 75,
            'kebobolan' => 47,
        ]);

        Tim::create([
            'logo_tim' => 'team6.svg',
            'nama_tim' => 'FPIK',
            'menang' => 18,
            'seri' => 8,
            'kalah' => 12,
            'gol' => 72,
            'kebobolan' => 53,
        ]);

        Tim::create([
            'logo_tim' => 'team7.svg',
            'nama_tim' => 'Tek Pertanian',
            'menang' => 18,
            'seri' => 7,
            'kalah' => 13,
            'gol' => 51,
            'kebobolan' => 46,
        ]);

        Tim::create([
            'logo_tim' => 'team8.svg',
            'nama_tim' => 'FKH',
            'menang' => 18,
            'seri' => 6,
            'kalah' => 14,
            'gol' => 70,
            'kebobolan' => 63,
        ]);

        Tim::create([
            'logo_tim' => 'team9.svg',
            'nama_tim' => 'FILKOM_1',
            'menang' => 15,
            'seri' => 14,
            'kalah' => 9,
            'gol' => 58,
            'kebobolan' => 46,
        ]);

        Tim::create([
            "logo_tim" => "team10.svg",
            "nama_tim" => "FILKOM_2",
            "menang"=> 15,
            "seri" => 7,
            "kalah" => 16,
            "gol" => 55,
            "kebobolan" => 53,
        ]);

        Tim::create([
            "logo_tim" => "team11.svg",
            "nama_tim" => "FKG",
            "menang"=> 11,
            "seri" => 12,
            "kalah" => 15,
            "gol" => 40,
            "kebobolan" => 49,
        ]);

        Tim::create([
            'logo_tim' => 'team12.svg',
            'nama_tim' => 'PSDKU Kediri',
            'menang' => 11,
            'seri' => 11,
            'kalah' =>16,
            'gol' => 38,
            'kebobolan' => 47,
        ]);

        Tim::create([
            'logo_tim' => 'team1.svg',
            'nama_tim' => 'Hukum_1',
            'menang' => 11,
            'seri' => 8,
            'kalah' => 19,
            'gol' => 31,
            'kebobolan' => 58,
        ]);

        Tim::create([
            'logo_tim' => 'team2.svg',
            'nama_tim' => 'Hukum_2',
            'menang' => 11,
            'seri' => 7,
            'kalah' => 20,
            'gol' => 42,
            'kebobolan' => 55,
        ]);

        Tim::create([
            'logo_tim' => 'team3.svg',
            'nama_tim' => 'FEB_1',
            'menang' => 11,
            'seri' => 6,
            'kalah' => 21,
            'gol' => 37,
            'kebobolan' => 71,
        ]);

        Tim::create([
            'logo_tim' => 'team4.svg',
            'nama_tim' => 'FEB_2',
            'menang' => 9,
            'seri' => 11,
            'kalah' => 18,
            'gol' => 38,
            'kebobolan' => 68,
        ]);

        Tim::create([
            'logo_tim' => 'team5.svg',
            'nama_tim' => 'FIA_1',
            'menang' => 8,
            'seri' => 12,
            'kalah' => 18,
            'gol' => 34,
            'kebobolan' => 57,
        ]);

        Tim::create([
            'logo_tim' => 'team6.svg',
            'nama_tim' => 'FIA_2',
            'menang' => 9,
            'seri' => 7,
            'kalah' => 22,
            'gol' => 51,
            'kebobolan' => 68,
        ]);

        Tim::create([
            "logo_tim" => "team7.svg",
            "nama_tim" => "FISIP",
            "menang"=> 7,
            "seri" => 10,
            "kalah" => 21,
            "gol" => 48,
            "kebobolan" => 78,
        ]);

        Tim::create([
            "logo_tim" => "team8.svg",
            "nama_tim" => "FIB",
            "menang"=> 6,
            "seri" => 7,
            "kalah" => 25,
            "gol" => 36,
            "kebobolan" => 73,
        ]);
    }
}
