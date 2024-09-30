<?php

use Illuminate\Database\Seeder;
use App\Models\ProductionPlan;

class ProductionPlanSeeder extends Seeder
{
    public function run()
    {
        ProductionPlan::create([
            'date' => now(),
            'status' => 'planned',
            'user_id' => 1, // Assuming user ID 1 is a Production Manager
        ]);
    }
}
