<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Antoni Coll', 'email' => 'antoni@example.com'],
            ['name' => 'Alan Delgado', 'email' => 'alan@example.com'],
            ['name' => 'María López', 'email' => 'maria@example.com'],
            ['name' => 'Jordi Ramírez', 'email' => 'jordi@example.com'],
            ['name' => 'Elena García', 'email' => 'elena@example.com'],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}