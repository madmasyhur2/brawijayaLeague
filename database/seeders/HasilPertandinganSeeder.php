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
            'logo_tim_a' => 'chelsea.jpg',
            'nama_tim_a' => 'chelsea',
            'skor_a' => 0,
            'logo_tim_b' => 'manchester_united.jpg',
            'nama_tim_b' => 'manchester united',
            'skor_b' => 4,
            'matchday' => 3 
        ]);
    }
}
