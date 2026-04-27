<?php

namespace Database\Seeders;

use App\Models\User;
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
        \DB::table('user')->insert([
            [
                'nama' => 'Administrator',
                'email' => 'admin@gmail.com',
                'role' => '0',
                'status' => 1,
                'password' => bcrypt('password123'),
                'hp' => '0812345678901',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sopian Aj',
                'email' => 'sopian4j@gmail.com',
                'role' => '1',
                'status' => 1,
                'password' => bcrypt('password123'),
                'hp' => '0812345678902',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
