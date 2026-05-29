<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    \App\Models\User::create([
        'name' => 'Davin Admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('password123'), // Password-nya nanti: password123
    ]);

    }
}
