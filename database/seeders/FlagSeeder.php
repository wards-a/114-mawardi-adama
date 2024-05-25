<?php

namespace Database\Seeders;

use App\Models\Flag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flag::truncate();

        $flags = [
            [
                'name' => 'recommended',
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'new',
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'best-seller',
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Flag::insert($flags);
    }
}
