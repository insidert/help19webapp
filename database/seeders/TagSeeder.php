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
        Tag::create(['name' => 'rapid-test', 'type' => 'test-center']);
        Tag::create(['name' => 'rtpcr', 'type' => 'test-center']);
        Tag::create(['name' => 'oxygen beds', 'type' => 'hospital']);
        Tag::create(['name' => 'icu beds', 'type' => 'hospital']);
        Tag::create(['name' => 'normal beds', 'type' => 'hospital']);
        Tag::create(['name' => 'ventilator beds', 'type' => 'hospital']);
        Tag::create(['name' => 'ventilator beds', 'type' => 'hospital']);
        Tag::create(['name' => 'remdesivir', 'type' => 'medicine']);
        Tag::create(['name' => 'oxygen suppliers', 'type' => 'medical-equipment']);
        Tag::create(['name' => 'oxygen cylinders', 'type' => 'medical-equipment']);
        Tag::create(['name' => 'oxygen concentrators', 'type' => 'medical-equipment']);
    }
}
