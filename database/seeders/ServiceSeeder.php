<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Service, City, Tag};
use Illuminate\Support\Arr;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = City::all();

        $tag_types = Tag::all();

        foreach ($cities as $city) {
            $services = Service::factory()->count(50)->create([
                'city_id' => $city->id,
                'name' => $city->name . '-' . \Illuminate\Support\Str::random(5)    
            ]);

            foreach ($services as $service) {
                $tag_ids = $tag_types->random(mt_rand(1, 5));

                $tag_ids = Arr::pluck($tag_ids, 'id');

                $service->tags()->sync($tag_ids);
            }
        }
    }
}
