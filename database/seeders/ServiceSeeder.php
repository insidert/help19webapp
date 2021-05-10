<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Spatie\Tags\Tag;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $serivces = Service::factory()->count(50)->create();

        $serivces->each(function ($service) {
            $tags = Tag::all();

            $random_tags = $tags->random(7)->all();

            for ($i=0; $i < count($random_tags); $i++) { 
                logger($random_tags[$i]);
                $data = $service->attachTag($random_tags[$i]['name'], $random_tags[$i]['type']);
            }
        });
    }
}
