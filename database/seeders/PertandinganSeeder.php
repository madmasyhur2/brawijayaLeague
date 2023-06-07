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
                'away_id' => 10,
                'matchday' => 3,
                'tanggal' => Carbon::parse('2022-01-09')
            ],
            [
                'home_id' => 11,
                'away_id' => 12,
                'matchday' => 3,
                'tanggal' => Carbon::parse('2022-01-09')
            ],
            [
                'home_id' => 13,
                'away_id' => 14,
                'matchday' => 4,
                'tanggal' => Carbon::parse('2022-01-15')
            ],
            [
                'home_id' => 15,
                'away_id' => 16,
                'matchday' => 4,
                'tanggal' => Carbon::parse('2022-01-15')
            ],
            [
                'home_id' => 17,
                'away_id' => 18,
                'matchday' => 5,
                'tanggal' => Carbon::parse('2022-01-16')
            ],
            [
                'home_id' => 19,
                'away_id' => 20,
                'matchday' => 5,
                'tanggal' => Carbon::parse('2022-01-16')
            ],
            [
                'home_id' => 1,
                'away_id' => 20,
                'matchday' => 6,
                'tanggal' => Carbon::parse('2022-01-23')
            ],
            [
                'home_id' => 2,
                'away_id' => 19,
                'matchday' => 6,
                'tanggal' => Carbon::parse('2022-01-23')
            ],
            [
                'home_id' => 3,
                'away_id' => 18,
                'matchday' => 7,
                'tanggal' => Carbon::parse('2022-01-24')
            ],
            [
                'home_id' => 4,
                'away_id' => 17,
                'matchday' => 7,
                'tanggal' => Carbon::parse('2022-01-24')
            ],
            [
                'home_id' => 5,
                'away_id' => 16,
                'matchday' => 8,
                'tanggal' => Carbon::parse('2022-01-31')
            ],
            [
                'home_id' => 6,
                'away_id' => 15,
                'matchday' => 8,
                'tanggal' => Carbon::parse('2022-01-31')
            ],
            [
                'home_id' => 7,
                'away_id' => 14,
                'matchday' => 9,
                'tanggal' => Carbon::parse('2022-02-01')
            ],
            [
                'home_id' => 8,
                'away_id' => 13,
                'matchday' => 9,
                'tanggal' => Carbon::parse('2022-02-01')
            ],
            [
                'home_id' => 9,
                'away_id' => 12,
                'matchday' => 10,
                'tanggal' => Carbon::parse('2022-02-08')
            ],
            [
                'home_id' => 10,
                'away_id' => 11,
                'matchday' => 10,
                'tanggal' => Carbon::parse('2022-02-08')
            ],
            [
                'home_id' => 11,
                'away_id' => 10,
                'matchday' => 11,
                'tanggal' => Carbon::parse('2022-02-09')
            ],
            [
                'home_id' => 12,
                'away_id' => 9,
                'matchday' => 11,
                'tanggal' => Carbon::parse('2022-02-09')
            ],
            [
                'home_id' => 13,
                'away_id' => 8,
                'matchday' => 12,
                'tanggal' => Carbon::parse('2022-02-15')
            ],
            [
                'home_id' => 14,
                'away_id' => 7,
                'matchday' => 12,
                'tanggal' => Carbon::parse('2022-02-15')
            ],
            [
                'home_id' => 15,
                'away_id' => 6,
                'matchday' => 13,
                'tanggal' => Carbon::parse('2022-02-16')
            ],
            [
                'home_id' => 16,
                'away_id' => 5,
                'matchday' => 13,
                'tanggal' => Carbon::parse('2022-02-16')
            ],
            [
                'home_id' => 17,
                'away_id' => 4,
                'matchday' => 14,
                'tanggal' => Carbon::parse('2022-02-23')
            ],
            [
                'home_id' => 18,
                'away_id' => 3,
                'matchday' => 14,
                'tanggal' => Carbon::parse('2022-02-23')
            ],
            [
                'home_id' => 19,
                'away_id' => 2,
                'matchday' => 15,
                'tanggal' => Carbon::parse('2022-02-24')
            ],
            [
                'home_id' => 20,
                'away_id' => 1,
                'matchday' => 15,
                'tanggal' => Carbon::parse('2022-02-24')
            ],
            [
                'home_id' => 1,
                'away_id' => 3,
                'matchday' => 16,
                'tanggal' => Carbon::parse('2022-03-03')
            ],
            [
                'home_id' => 2,
                'away_id' => 4,
                'matchday' => 16,
                'tanggal' => Carbon::parse('2022-03-03')
            ],
            [
                'home_id' => 5,
                'away_id' => 7,
                'matchday' => 17,
                'tanggal' => Carbon::parse('2022-03-04')
            ],
            [
                'home_id' => 6,
                'away_id' => 8,
                'matchday' => 17,
                'tanggal' => Carbon::parse('2022-03-04')
            ],
            [
                'home_id' => 9,
                'away_id' => 11,
                'matchday' => 18,
                'tanggal' => Carbon::parse('2022-03-11')
            ],
            [
                'home_id' => 10,
                'away_id' => 12,
                'matchday' => 18,
                'tanggal' => Carbon::parse('2022-03-11')
            ]
        ];

        foreach ($data as $pertandingan) {
            Pertandingan::create($pertandingan);
        }
    }
}
