<?php

namespace Database\Seeders;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Adminbrow',
            'email' => 'Adminganteng@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            HasilPertandinganSeeder::class,
            PertandinganSeeder::class,
            PostSeeder::class,
            TimSeeder::class,
            // UserSeeder::class,
        ]);
    }
}
