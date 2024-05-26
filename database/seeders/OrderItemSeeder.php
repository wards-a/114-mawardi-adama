<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderItem::truncate();

        $order_items = [
            [
                'order_id' => 1,
                'product_id' => 7,
                'quantity' => 50,
                'variant' => '25x35 cm',
                'price' => 3500
            ],
            [
                'order_id' => 1,
                'product_id' => 7,
                'quantity' => 30,
                'variant' => '30x40 cm',
                'price' => 4100
            ],
            [
                'order_id' => 1,
                'product_id' => 7,
                'quantity' => 10,
                'variant' => '38x45 cm',
                'price' => 5200
            ]
        ];

        OrderItem::insert($order_items);
    }
}
