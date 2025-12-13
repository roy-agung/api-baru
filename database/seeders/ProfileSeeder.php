<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now()->toDateTimeString();

        DB::table('profile')->insert([
            [
                'id' => 1,
                'nama' => 'Roy Agung Pamungkas',
                'nis' => 12310024,
                'rombel' => 'PPLG XII-4',
                'rayon' => 'Cisarua - 7',
                'media_sosial' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'nama' => 'Siti Nurjanah',
                'nis' => 12310025,
                'rombel' => 'PPLG XII-4',
                'rayon' => 'Cisarua - 3',
                'media_sosial' => '@sitinur_25',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'nama' => 'Dimas Pratama',
                'nis' => 12310026,
                'rombel' => 'PPLG XII-3',
                'rayon' => 'Cicurug - 2',
                'media_sosial' => '@dimasprtm',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'nama' => 'Aulia Rahman',
                'nis' => 12310027,
                'rombel' => 'PPLG XII-2',
                'rayon' => 'Ciawi - 4',
                'media_sosial' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 5,
                'nama' => 'Nadila Putri',
                'nis' => 12310028,
                'rombel' => 'PPLG XII-1',
                'rayon' => 'Sukasari - 1',
                'media_sosial' => '@nadila_putri',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
