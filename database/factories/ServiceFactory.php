<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\{Service, City};
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
            'phone' => $this->faker->phoneNumber(),
            'description' => $this->faker->paragraph(),
            'url' => $this->faker->url(),
            'address' => $this->faker->address(),
            'city_id' => City::factory(),
            'status' => [
                'name' => $this->faker->randomElement(['verified', 'not-working', 'fake',]),
                'markedOn' => Carbon::now()->format('M d, Y -  h:i a')
            ]
        ];
    }
}
