<?php

namespace Database\Factories;

use App\Models\MobileAccessToken;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class MobileAccessTokenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MobileAccessToken::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'token' => Str::random(7),
        ];
    }
}
