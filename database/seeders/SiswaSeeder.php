<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now()->toDateTimeString();

        DB::table('siswa')->insert([
            [
                'id' => 1,
                'nama' => 'roy',
                'nis' => 12310024,
                'rombel' => 'pplg xii-4',
                'rayon' => 'cisarua 7',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'nama' => 'siti',
                'nis' => 12310025,
                'rombel' => 'pplg xii-4',
                'rayon' => 'cisarua 3',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'nama' => 'dimas',
                'nis' => 12310026,
                'rombel' => 'pplg xii-3',
                'rayon' => 'cicurug 2',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'nama' => 'aulia',
                'nis' => 12310027,
                'rombel' => 'pplg xii-2',
                'rayon' => 'ciawi 4',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 5,
                'nama' => 'nadila',
                'nis' => 12310028,
                'rombel' => 'pplg xii-1',
                'rayon' => 'sukasari 1',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 6,
                'nama' => 'fikri',
                'nis' => 12310029,
                'rombel' => 'pplg xii-4',
                'rayon' => 'cisarua 5',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 7,
                'nama' => 'reza',
                'nis' => 12310030,
                'rombel' => 'pplg xii-3',
                'rayon' => 'cicurug 1',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 8,
                'nama' => 'amelia',
                'nis' => 12310031,
                'rombel' => 'pplg xii-2',
                'rayon' => 'ciawi 6',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 9,
                'nama' => 'rani',
                'nis' => 12310032,
                'rombel' => 'pplg xii-1',
                'rayon' => 'sukasari 4',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 10,
                'nama' => 'ahmad',
                'nis' => 12310033,
                'rombel' => 'pplg xii-4',
                'rayon' => 'cisarua 2',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
