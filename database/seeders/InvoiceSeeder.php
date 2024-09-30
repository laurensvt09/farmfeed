<?php

use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoiceSeeder extends Seeder
{
    public function run()
    {
        Invoice::create([
            'order_id' => 1, // Assuming order ID 1 exists
            'amount' => 1500.00,
            'payment_status' => 'pending',
        ]);
    }
}
