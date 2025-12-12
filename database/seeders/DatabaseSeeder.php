<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil ProfileSeeder dengan cara yang benar
        $this->call([
            ProfileSeeder::class,
            UserSeeder::class,
            SiswaSeeder::class
        ]);
    }
}
