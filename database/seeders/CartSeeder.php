<?php

namespace Database\Seeders;

use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cart::truncate();

        $customer_cart = [
            'user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        Cart::insert($customer_cart);
    }
}
