<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HouseMarket;
use App\Models\HousePricing;

class HouseDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $houseMarket = HouseMarket::create([
            'name' => 'House Market 1',
            'address' => 'House Market 1 Address',
        ]);


        // Create a house pricing from the january to december
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        foreach ($months as $month) {
            HousePricing::create([
                'house_market_id' => $houseMarket->id,
                'month' => $month,
                'price' => rand(10000, 100000),
            ]);
        }
    }
}
