<?php

namespace Database\Seeders;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::truncate();

        $orders = [
            [
                'user_id' => 2,
                'customer_name' => 'Eulish',
                'customer_address' => 'Jalan Mawar, Jawa Barat',
                'shipping_address' => 'Jalan Melati, Jawa Barat',
                'phone_number' => '+6281573550274',
                'shipping_cost' => 32000,
                'discount' => null,
                'status' => 'shipped',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        Order::insert($orders);
    }
}
