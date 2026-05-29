<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        // Menyuntikkan data fiktif buatan kita sendiri ke database lokal
        DB::table('students')->insert([
            [
                'nama' => 'Davin Putra',
                'email' => 'davin@devacademy.sch.id',
                'kota' => 'Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Coach Bagus',
                'email' => 'bagus@devacademy.sch.id',
                'kota' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Aminah',
                'email' => 'siti@devacademy.sch.id',
                'kota' => 'Surabaya',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}