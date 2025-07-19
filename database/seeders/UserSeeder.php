<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'ccc@gmail.com'],
            [
                'name' => 'ccc',
                'password' => bcrypt('secret123'),
                'role' => 'admin',
            ]
        );
        User::updateOrCreate(
            ['email' => 't@g.c'],
            [
                'name' => 'Test User',
                'password' => bcrypt('1'),
                'role' => 'user',
            ]
        );
    }
}