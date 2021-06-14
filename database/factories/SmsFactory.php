<?php

namespace Database\Factories;

use App\Models\Sms;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class SmsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sms::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contact' => $this->faker->phoneNumber,
            'type' => Arr::random(["incoming","outgoing"]),
            'date' => now(),
            'message' => $this->faker->paragraph(2),
        ];
    }
}
