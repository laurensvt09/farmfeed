<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Production Manager',
            'username' => 'prod_manager',
            'password' => Hash::make('password'),
            'role' => 'ProductionManager',
        ]);

        User::create([
            'name' => 'Quality Controller',
            'username' => 'quality_controller',
            'password' => Hash::make('password'),
            'role' => 'QualityController',
        ]);

        User::create([
            'name' => 'Logistics Staff',
            'username' => 'logistics_staff',
            'password' => Hash::make('password'),
            'role' => 'LogisticsStaff',
        ]);

        User::create([
            'name' => 'Farmer',
            'username' => 'farmer_user',
            'password' => Hash::make('password'),
            'role' => 'Farmer',
        ]);
    }
}
