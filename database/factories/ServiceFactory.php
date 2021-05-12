<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'contact' => $this->faker->phoneNumber(),
            'description' => $this->faker->paragraph(),
            'url' => $this->faker->url(),
            'address' => $this->faker->address(),
            'city_id' => City::factory()
        ];
    }
}
