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
                'title' => fake()->sentence(),
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Blacu',
                'title' => fake()->sentence(),
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dinier',
                'title' => fake()->sentence(),
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kanvas',
                'title' => fake()->sentence(),
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Jeans',
                'title' => fake()->sentence(),
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Parasut',
                'title' => fake()->sentence(),
                'description' => fake()->sentence(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Category::insert($categories);
    }
}
