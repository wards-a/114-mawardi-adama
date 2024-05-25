<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::truncate();

        $products = [
            [
                'category_id' => 2,
                'flag_id' => 1,
                'name' => 'Blacu Cream',
                'description' => fake()->paragraph(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => 2,
                'flag_id' => 1,
                'name' => 'Blacu Putih Polyster',
                'description' => fake()->paragraph(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => 3,
                'flag_id' => 1,
                'name' => 'Dinier Abu',
                'description' => fake()->paragraph(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => 3,
                'flag_id' => 1,
                'name' => 'Dinier Biru',
                'description' => fake()->paragraph(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => 3,
                'flag_id' => 1,
                'name' => 'Dinier Biru Donker',
                'description' => fake()->paragraph(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => 3,
                'flag_id' => 1,
                'name' => 'Dinier Hijau',
                'description' => fake()->paragraph(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => 1,
                'flag_id' => 1,
                'name' => 'Spunbond HDL Biru Muda',
                'description' => fake()->paragraph(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => 1,
                'flag_id' => 1,
                'name' => 'Spunbond HDL Box Merah',
                'description' => fake()->paragraph(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => 1,
                'flag_id' => 1,
                'name' => 'Spunbond Oval Hitam',
                'description' => fake()->paragraph(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => 2,
                'flag_id' => 1,
                'name' => 'Pouch Blacu',
                'description' => fake()->paragraph(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        Product::insert($products);
    }
}
