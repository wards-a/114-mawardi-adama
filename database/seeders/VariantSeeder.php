<?php

namespace Database\Seeders;

use App\Models\Variant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Variant::truncate();

        $variants = [
            [
                'product_id' => 1,
                'size' => '30x40 cm',
                'selling_price' => 15000,
                'cuts_price' => null
            ],
            [
                'product_id' => 2,
                'size' => '30x40 cm',
                'selling_price' => 15000,
                'cuts_price' => null
            ],
            [
                'product_id' => 3,
                'size' => '30x40x10 cm',
                'selling_price' => 17000,
                'cuts_price' => null
            ],
            [
                'product_id' => 4,
                'size' => '30x40x10 cm',
                'selling_price' => 17000,
                'cuts_price' => null
            ],
            [
                'product_id' => 5,
                'size' => '30x40x10 cm',
                'selling_price' => 17000,
                'cuts_price' => null
            ],
            [
                'product_id' => 6,
                'size' => '30x40x10 cm',
                'selling_price' => 17000,
                'cuts_price' => null
            ],
            [
                'product_id' => 7,
                'size' => '25x35 cm',
                'selling_price' => 3500,
                'cuts_price' => 3900
            ],
            [
                'product_id' => 7,
                'size' => '30x40 cm',
                'selling_price' => 4100,
                'cuts_price' => null
            ],
            [
                'product_id' => 7,
                'size' => '38x45 cm',
                'selling_price' => 5200,
                'cuts_price' => null
            ],
            [
                'product_id' => 8,
                'size' => '25x35 cm',
                'selling_price' => 3900,
                'cuts_price' => null
            ],
            [
                'product_id' => 8,
                'size' => '30x40 cm',
                'selling_price' => 4100,
                'cuts_price' => null
            ],
            [
                'product_id' => 8,
                'size' => '38x45 cm',
                'selling_price' => 5200,
                'cuts_price' => null
            ],            
            [
                'product_id' => 9,
                'size' => '20x25 cm',
                'selling_price' => 2600,
                'cuts_price' => null
            ],
            [
                'product_id' => 9,
                'size' => '25x35 cm',
                'selling_price' => 2900,
                'cuts_price' => null
            ],
            [
                'product_id' => 9,
                'size' => '30x40 cm',
                'selling_price' => 3200,
                'cuts_price' => null
            ],                      
            [
                'product_id' => 10,
                'size' => '10x20 cm',
                'selling_price' => 7000,
                'cuts_price' => null
            ],
        ];

        Variant::insert($variants);
    }
}
