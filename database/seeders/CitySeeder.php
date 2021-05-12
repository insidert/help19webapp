<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create(['name' => 'rajahmundry', 'state' => 'andhra pradesh']);
        City::create(['name' => 'hyderabad', 'state' => 'telangana']);
        City::create(['name' => 'visakhapatnam', 'state' => 'andhra pradesh']);
        City::create(['name' => 'ranchi', 'state' => 'jharkand']);
    }
}
