<?php

use Illuminate\Database\Seeder;
use App\Models\Complaint;

class ComplaintSeeder extends Seeder
{
    public function run()
    {
        Complaint::create([
            'date' => now(),
            'description' => 'Late delivery',
            'status' => 'open',
            'user_id' => 4, // Assuming user ID 4 is a Farmer
            'order_id' => 1, // Assuming order ID 1 exists
        ]);
    }
}

