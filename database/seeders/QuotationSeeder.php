<?php

namespace Database\Seeders;

use App\Models\Quotation;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quotation::truncate();

        $quotations = [
            [
                'order_id' => 1,
                'reference' => 'QUO/2024/0001',
                'issue_date' => '2024-05-19',
                'notes' => null,
                'signed_by' => 'Halan',
                'created_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        Quotation::insert($quotations);
    }
}
