<?php

namespace Database\Seeders;

use App\Models\CartItem;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CartItem::truncate();

        $cart_items = [
            [
                'cart_id' => 1,
                'product_id' => 7,
                'variant_id' => 7,
                'quantity' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'cart_id' => 1,
                'product_id' => 7,
                'variant_id' => 8,
                'quantity' => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'cart_id' => 1,
                'product_id' => 7,
                'variant_id' => 9,
                'quantity' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        CartItem::insert($cart_items);
    }
}
