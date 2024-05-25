<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        $users = [
            [
                'role_id' => 1,
                'name' => 'Halan',
                'email' => 'admin@gmail.com',
                'password' => 'admin',
                'phone_number' => '+6282155026594',
                'gender' => 'L',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 2,
                'name' => 'Eulish',
                'email' => 'customer@gmail.com',
                'password' => 'customer',
                'phone_number' => '+6281573550274',
                'gender' => 'P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        User::insert($users);
    }
}
