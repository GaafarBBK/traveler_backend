<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'user_type' => 'admin',
            'sex' => 'male',
            'birth_date' => '1980-01-01',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
            'user_type' => 'user',
            'sex' => 'female',
            'birth_date' => '1990-01-01',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('password'),
            'user_type' => 'user',
            'sex' => 'male',
            'birth_date' => '1985-05-15',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'password' => bcrypt('password'),
            'user_type' => 'user',
            'sex' => 'female',
            'birth_date' => '1992-07-20',
            'email_verified_at' => now(),
        ]);
    }
}
