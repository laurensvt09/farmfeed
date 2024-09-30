<?php

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::create([
            'date' => now(),
            'status' => 'placed',
            'user_id' => 4, // Assuming user ID 4 is a Farmer
            'delivery_id' => 1, // Assuming delivery ID 1 exists
        ]);
    }
}

