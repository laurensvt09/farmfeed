<?php

use Illuminate\Database\Seeder;
use App\Models\Delivery;

class DeliverySeeder extends Seeder
{
    public function run()
    {
        Delivery::create([
            'status' => 'in_transit',
            'expected_arrival_time' => now()->addDays(2),
            'route' => 'Route A',
            'order_id' => 1, // Assuming order ID 1 exists
        ]);
    }
}

