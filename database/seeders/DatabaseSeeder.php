<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $admin = User::firstOrCreate([
            'id' => 1,
            'username' => 'admin',
            'password' => '$2a$12$KmHgsmu51r1XrqgUvBh4AuWvrvWkVu5KxA1Jh3S8oiL.38hubyNFO', //alamakota
            'email' => 'admin@admin.com',
            'is_active' => 1,
        ]);
    }
}
