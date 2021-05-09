<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiceSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Service::factory()->count(5)->create();
    }
}
