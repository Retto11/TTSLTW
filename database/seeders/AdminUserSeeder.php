<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'sue378512@gmail.com'],
            [
                'name' => 'sue378512',
                'password' => Hash::make('secret12345'),
                'role' => 'admin',
            ]
        );
    }
}
