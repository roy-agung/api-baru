<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now()->toDateTimeString();

        DB::table('user')->insert([
            [
                'id' => 1,
                'nis' => 12310024,
                'password' => Hash::make('12310024'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'nis' => 12310025,
                'password' => Hash::make('12310025'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'nis' => 12310026,
                'password' => Hash::make('12310026'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'nis' => 12310027,
                'password' => Hash::make('12310027'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 5,
                'nis' => 12310028,
                'password' => Hash::make('12310028'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
