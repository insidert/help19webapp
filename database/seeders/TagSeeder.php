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
        Tag::findOrCreate('remdesivir', 'medicine');
        Tag::findOrCreate('free home delivery', 'food');
        Tag::findOrCreate('oxygen beds', 'hospital');
        Tag::findOrCreate('oxygen suppliers', 'medical-equipment');
        Tag::findOrCreate('government website', 'weblink');
        Tag::findOrCreate('andhra pradesh', 'state');
        Tag::findOrCreate('east godavari', 'district');
    }
}
