<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // Admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'), // Encrypting the password
                'role' => 'admin',
                'status' => 'active',
                'created_at' => now(), // Adding timestamps
                'updated_at' => now(),
            ],
            // User
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('111'), // Encrypting the password
                'role' => 'user',
                'status' => 'active',
                'created_at' => now(), // Adding timestamps
                'updated_at' => now(),
            ],
        ]);
    }
}

