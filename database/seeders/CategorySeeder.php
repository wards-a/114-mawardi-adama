<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::truncate();

        $categories = [
            [
                'name' => 'Spunbond',
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Blacu',
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dinier',
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kanvas',
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Jeans',
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Parasut',
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Category::insert($categories);
    }
}
