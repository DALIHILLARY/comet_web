<?php

namespace Database\Factories;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class PhoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Phone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imei' => (string) $this->faker->numberBetween(21234567890123456,71234567890123456),
            'model' =>  Str::random(6),
            'readable_name' => $this->faker->name,
        ];
    }
}
