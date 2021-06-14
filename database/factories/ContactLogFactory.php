<?php

namespace Database\Factories;

use App\Models\ContactLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactLogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactLog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone_number' =>$this->faker->phoneNumber,
            'duration' => $this->faker->numberBetween(2,200),
            'date' => $this->faker->dateTimeBetween('-5 months'),
            'type' => $this->faker->numberBetween(1,3),
        ];
    }
}
