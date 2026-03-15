<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'email' => 'admin@stok.com',
            'name' => 'Admin',
            'password' => Hash::make('stok'),
        ]);

        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@stok.com',
            'password' => Hash::make('test'),
        ]);
    }
}
