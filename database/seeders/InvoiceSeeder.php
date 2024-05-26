<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Invoice::truncate();

        $invoices = [
            [
                'order_id' => 1,
                'reference' => 'INV/2024/0001',
                'issue_date' => '2024-05-26',
                'notes' => null,
                'signed_by' => 'Halan',
                'created_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        Invoice::insert($invoices);
    }
}
