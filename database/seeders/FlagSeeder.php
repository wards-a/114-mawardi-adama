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
                'title' => 'Rekomendasi Untukmu',
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'new',
                'title' => 'Produk Baru Kami',
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'best-seller',
                'title' => 'Best Seller All Time',
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Flag::insert($flags);
    }
}
