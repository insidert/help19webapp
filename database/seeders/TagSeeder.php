<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['name' => 'free home delivery', 'type' => 'food']);
        Tag::create(['name' => 'paid home delivery', 'type' => 'food']);
        Tag::create(['name' => 'oxygen beds', 'type' => 'hospital']);
        Tag::create(['name' => 'icu beds', 'type' => 'hospital']);
        Tag::create(['name' => 'normal beds', 'type' => 'hospital']);
        Tag::create(['name' => 'ventilator beds', 'type' => 'hospital']);
        Tag::create(['name' => 'ventilator beds', 'type' => 'hospital']);
        Tag::create(['name' => 'remdesivir', 'type' => 'medicine']);
        Tag::create(['name' => 'oxygen suppliers', 'type' => 'medical-equipment']);
        Tag::create(['name' => 'oxygen cylinders', 'type' => 'medical-equipment']);
        Tag::create(['name' => 'oxygen concentrators', 'type' => 'medical-equipment']);
        Tag::create(['name' => 'A+', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'A-', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'A1+', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'A1-', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'A1B+', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'A1B-', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'A2+', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'A2-', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'A2B+', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'A2B-', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'AB+', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'AB-', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'B+', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'B-', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'Bombay Blood Group', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'INRA', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'O+', 'type' => 'plasma-donor']);
        Tag::create(['name' => 'O-', 'type' => 'plasma-donor']);
    }
}
