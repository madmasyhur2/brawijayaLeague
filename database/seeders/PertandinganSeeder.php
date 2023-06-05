<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pertandingan;

class PertandinganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'home_id' => 1,
                // 'logo_home_tim' => 'logo_manchester_united.jpg',
                'away_id' => 2,
                // 'logo_away_tim' => 'logo_manchester_city.jpg',
                'matchday' => 1,
                'tanggal' => Carbon::parse('2022-01-01')
            ],
            [
                'home_id' => 3,
                // 'logo_home_tim' => 'logo_chelsea.jpg',
                'away_id' => 4,
                // 'logo_away_tim' => 'logo_galatasaray.jpg',
                'matchday' => 1,
                'tanggal' => Carbon::parse('2022-01-01')
            ],
            [
                'home_id' => 5,
                // 'logo_home_tim' => 'logo_liverpool.jpg',
                'away_id' => 6,
                // 'logo_away_tim' => 'logo_arsenal.jpg',
                'matchday' => 2,
                'tanggal' => Carbon::parse('2022-01-01')
            ],
            [
                'home_id' => 7,
                // 'logo_home_tim' => 'logo_acmilan.jpg',
                'away_id' => 8,
                // 'logo_away_tim' => 'logo_intermilan.jpg',
                'matchday' => 2,
                'tanggal' => Carbon::parse('2022-01-01')
            ],
            [
                'home_id' => 9,
                // 'logo_home_tim' => 'logo_juventus.jpg',
                'away_id' => 2,
                // 'logo_away_tim' => 'logo_manchester_city.jpg',
                'matchday' => 3,
                'tanggal' => Carbon::parse('2022-01-01')
            ],
            [
                'home_id' => 1,
                // 'logo_home_tim' => 'logo_manchester_united.jpg',
                'away_id' => 6,
                // 'logo_away_tim' => 'logo_arsenal.jpg',
                'matchday' => 3,
                'tanggal' => Carbon::parse('2022-01-01')
            ],
            [
                'home_id' => 8,
                // 'logo_home_tim' => 'logo_intermilan.jpg',
                'away_id' => 4,
                // 'logo_away_tim' => 'logo_galatasaray.jpg',
                'matchday' => 4,
                'tanggal' => Carbon::parse('2022-01-01')
            ],
            [
                'home_id' => 5,
                // 'logo_home_tim' => 'logo_liverpool.jpg',
                'away_id' => 7,
                // 'logo_away_tim' => 'logo_acmilan.jpg',
                'matchday' => 4,
                'tanggal' => Carbon::parse('2022-01-01')
            ],
        ];

        foreach ($data as $pertandingan) {
            Pertandingan::create($pertandingan);
        }
    }
}
