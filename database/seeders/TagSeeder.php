<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Tags\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::findOrCreate('rajahmundry', 'city');
        Tag::findOrCreate('visakhapatnam', 'city');
        Tag::findOrCreate('hyderabad', 'city');
        Tag::findOrCreate('warangal', 'city');
        Tag::findOrCreate('ranchi', 'city');
        Tag::findOrCreate('andhra pradesh', 'state');
        Tag::findOrCreate('telangana', 'state');
        Tag::findOrCreate('jharkhand', 'state');
        Tag::findOrCreate('remdesivir', 'medicine');
        Tag::findOrCreate('free home delivery', 'food');
        Tag::findOrCreate('paid home delivery', 'food');
        Tag::findOrCreate('oxygen beds', 'hospital');
        Tag::findOrCreate('icu beds', 'hospital');
        Tag::findOrCreate('normal beds', 'hospital');
        Tag::findOrCreate('ventilator beds', 'hospital');
        Tag::findOrCreate('ventilator beds', 'hospital');
        Tag::findOrCreate('oxygen suppliers', 'medical-equipment');
        Tag::findOrCreate('oxygen cylinders', 'medical-equipment');
        Tag::findOrCreate('oxygen concentrators', 'medical-equipment');
        Tag::findOrCreate('government website', 'weblink');
        Tag::findOrCreate('twitter feed', 'weblink');
        Tag::findOrCreate('A+', 'plasma-donor');
        Tag::findOrCreate('A-', 'plasma-donor');
        Tag::findOrCreate('A1+', 'plasma-donor');
        Tag::findOrCreate('A1-', 'plasma-donor');
        Tag::findOrCreate('A1B+', 'plasma-donor');
        Tag::findOrCreate('A1B-', 'plasma-donor');
        Tag::findOrCreate('A2+', 'plasma-donor');
        Tag::findOrCreate('A2-', 'plasma-donor');
        Tag::findOrCreate('A2B+', 'plasma-donor');
        Tag::findOrCreate('A2B-', 'plasma-donor');
        Tag::findOrCreate('AB+', 'plasma-donor');
        Tag::findOrCreate('AB-', 'plasma-donor');
        Tag::findOrCreate('B+', 'plasma-donor');
        Tag::findOrCreate('B-', 'plasma-donor');
        Tag::findOrCreate('Bombay Blood Group', 'plasma-donor');
        Tag::findOrCreate('INRA', 'plasma-donor');
        Tag::findOrCreate('O+', 'plasma-donor');
        Tag::findOrCreate('O-', 'plasma-donor');
    }
}
