<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;   

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        // User biasa
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('yourpassword'),
            'role' => 'user',
        ]);

       User::factory()->create([
    'name' => 'Admin User',
    'email' => 'admin@example.com',
    'password' => Hash::make('admin123'),
    'role' => 'admin',
]);

    }
}
