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
                'home_tim' => 'Man United',
                'logo_home_tim' => 'logo_manchester_united.jpg',
                'away_tim' => 'Man City',
                'logo_away_tim' => 'logo_manchester_city.jpg',
                'matchday' => 1,
                'tanggal' => Carbon::parse('2022-01-01'),
                'jam' => '02.00'
            ],
            [
                'home_tim' => 'Chelsea',
                'logo_home_tim' => 'logo_chelsea.jpg',
                'away_tim' => 'Galatasaray',
                'logo_away_tim' => 'logo_galatasaray.jpg',
                'matchday' => 1,
                'tanggal' => Carbon::parse('2022-01-01'),
                'jam' => '06.00'
            ],
            [
                'home_tim' => 'Liverpool',
                'logo_home_tim' => 'logo_liverpool.jpg',
                'away_tim' => 'Arsenal',
                'logo_away_tim' => 'logo_arsenal.jpg',
                'matchday' => 2,
                'tanggal' => Carbon::parse('2022-01-01'),
                'jam' => '02.00'
            ],
            [
                'home_tim' => 'AC Milan',
                'logo_home_tim' => 'logo_acmilan.jpg',
                'away_tim' => 'Inter Milan',
                'logo_away_tim' => 'logo_intermilan.jpg',
                'matchday' => 2,
                'tanggal' => Carbon::parse('2022-01-01'),
                'jam' => '06.00'
            ],
            [
                'home_tim' => 'Juventus',
                'logo_home_tim' => 'logo_juventus.jpg',
                'away_tim' => 'Man City',
                'logo_away_tim' => 'logo_manchester_city.jpg',
                'matchday' => 3,
                'tanggal' => Carbon::parse('2022-01-01'),
                'jam' => '02.00'
            ],
            [
                'home_tim' => 'Man United',
                'logo_home_tim' => 'logo_manchester_united.jpg',
                'away_tim' => 'Arsenal',
                'logo_away_tim' => 'logo_arsenal.jpg',
                'matchday' => 3,
                'tanggal' => Carbon::parse('2022-01-01'),
                'jam' => '06.00'
            ],
            [
                'home_tim' => 'Inter Milan',
                'logo_home_tim' => 'logo_intermilan.jpg',
                'away_tim' => 'Galatasaray',
                'logo_away_tim' => 'logo_galatasaray.jpg',
                'matchday' => 4,
                'tanggal' => Carbon::parse('2022-01-01'),
                'jam' => '02.00'
            ],
            [
                'home_tim' => 'Liverpool',
                'logo_home_tim' => 'logo_liverpool.jpg',
                'away_tim' => 'AC Milan',
                'logo_away_tim' => 'logo_acmilan.jpg',
                'matchday' => 4,
                'tanggal' => Carbon::parse('2022-01-01'),
                'jam' => '06.00'
            ],
        ];

        foreach ($data as $pertandingan) {
            Pertandingan::create($pertandingan);
        }
    }
}
