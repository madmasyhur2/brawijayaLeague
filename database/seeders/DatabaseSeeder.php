<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            HasilPertandinganSeeder::class,
            PertandinganSeeder::class,
            PostSeeder::class,
            TimSeeder::class,
            UserSeeder::class,
        ]);
    }
}
