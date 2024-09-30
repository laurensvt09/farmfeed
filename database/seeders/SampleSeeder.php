<?php

use Illuminate\Database\Seeder;
use App\Models\Sample;

class SampleSeeder extends Seeder
{
    public function run()
    {
        Sample::create([
            'date' => now(),
            'result' => 'Pass',
            'quality_status' => 'Good',
            'user_id' => 2, // Assuming user ID 2 is a Quality Controller
            'production_order_id' => 1, // Assuming production_plan ID 1 exists
        ]);
    }
}

