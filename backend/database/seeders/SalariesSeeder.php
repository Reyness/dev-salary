<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = DB::table('users')->get();
        $regions = ['Madrid', 'Cataluña', 'Andalucía', 'Valencia', 'Galicia'];

        foreach ($users as $user) {
            DB::table('salaries')->insert([
                'user_id' => $user->id,
                'years_experience' => rand(1, 15),
                'salary' => rand(25000, 80000), // Salario entre 25k y 80k
                'region' => $regions[array_rand($regions)], // Escoge una región aleatoria
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}