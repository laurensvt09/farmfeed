<?php

use Illuminate\Database\Seeder;
use App\Models\RawMaterial;

class RawMaterialSeeder extends Seeder
{
    public function run()
    {
        RawMaterial::create([
            'name' => 'Corn',
            'current_stock' => 1000,
            'minimum_stock' => 100,
            'quality_status' => 'Good',
            'production_order_id' => 1, // Assuming production_plan ID 1 exists
        ]);

        RawMaterial::create([
            'name' => 'Soybean',
            'current_stock' => 500,
            'minimum_stock' => 50,
            'quality_status' => 'Good',
            'production_order_id' => 1,
        ]);
    }
}
