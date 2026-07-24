<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Juan Gabriel',
            'email' => 'juan@taller.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Rita Mayerlin',
            'email' => 'rita@taller.com',
            'password' => Hash::make('password123'),
        ]);
    }
}