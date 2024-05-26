<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::truncate();
        
        // Address::factory(2)->create([
        //     'user_id'=> 2
        // ]);

        $customer_addresses = [
            [
                'user_id' => 2,
                'name' => 'Rumah',
                'address' => 'Jalan Mawar, Jawa Barat',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'user_id' => 2,
                'name' => 'Kantor',
                'address' => 'Jalan Melati, Jawa Barat',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Address::insert($customer_addresses);
    }
}
