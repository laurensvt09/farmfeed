<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RawMaterialSeeder::class,
            ProductionPlanSeeder::class,
            SampleSeeder::class,
            DeliverySeeder::class,
            OrderSeeder::class,
            InvoiceSeeder::class,
            ComplaintSeeder::class,
        ]);
    }
}
