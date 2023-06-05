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
                'away_id' => 2,
                'matchday' => 1,
                'tanggal' => Carbon::parse('2022-01-01')
            ],
            [
                'home_id' => 3,
                'away_id' => 4,
                'matchday' => 1,
                'tanggal' => Carbon::parse('2022-01-01')
            ],
            [
                'home_id' => 5,
                'away_id' => 6,
                'matchday' => 2,
                'tanggal' => Carbon::parse('2022-01-08')
            ],
            [
                'home_id' => 7,
                'away_id' => 8,
                'matchday' => 2,
                'tanggal' => Carbon::parse('2022-01-08')
            ],
            [
                'home_id' => 9,
                'away_id' => 2,
                'matchday' => 3,
                'tanggal' => Carbon::parse('2022-01-09')
            ],
            [
                'home_id' => 1,
                'away_id' => 6,
                'matchday' => 3,
                'tanggal' => Carbon::parse('2022-01-09')
            ],
            [
                'home_id' => 8,
                'away_id' => 4,
                'matchday' => 4,
                'tanggal' => Carbon::parse('2022-01-15')
            ],
            [
                'home_id' => 5,
                'away_id' => 7,
                'matchday' => 4,
                'tanggal' => Carbon::parse('2022-01-15')
            ],
        ];

        foreach ($data as $pertandingan) {
            Pertandingan::create($pertandingan);
        }
    }
}
