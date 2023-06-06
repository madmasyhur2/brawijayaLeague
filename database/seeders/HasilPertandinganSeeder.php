<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\hasil_pertandingan;

class HasilPertandinganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        hasil_pertandingan::create([
            'gambar' => 'highlight1.jpg',
            'pertandingans_id' => 1,
            'skor_home' => 0,
            'skor_away' => 4, 
        ]);

        hasil_pertandingan::create([
            'gambar' => 'highlight2.jpg',
            'pertandingans_id' => 2,
            'skor_home' => 2,
            'skor_away' => 2, 
        ]);

        hasil_pertandingan::create([
            'gambar' => 'highlight3.jpg',
            'pertandingans_id' => 3,
            'skor_home' => 3,
            'skor_away' => 1, 
        ]);

        hasil_pertandingan::create([
            'gambar' => 'highlight4.jpg',
            'pertandingans_id' => 4,
            'skor_home' => 0,
            'skor_away' => 0, 
        ]);


        hasil_pertandingan::create([
            'gambar' => 'highlight5.jpg',
            'pertandingans_id' => 5,
            'skor_home' => 5,
            'skor_away' => 1, 
        ]);

        hasil_pertandingan::create([
            'gambar' => 'highlight6.jpg',
            'pertandingans_id' => 6,
            'skor_home' => 0,
            'skor_away' => 0, 
        ]);

        hasil_pertandingan::create([
            'gambar' => 'highlight7.jpg',
            'pertandingans_id' => 7,
            'skor_home' => 2,
            'skor_away' => 3, 
        ]);

        hasil_pertandingan::create([
            'gambar' => 'highlight8.jpg',
            'pertandingans_id' => 8,
            'skor_home' => 4,
            'skor_away' => 2, 
        ]);
    }
}
