<?php

namespace Database\Factories;

use App\Models\SocialApp;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocialAppFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialApp::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contact' =>  $this->faker->name,
            'type'  =>  $this->faker->randomElement(["incoming","outgoing"]),
            'message'  =>   $this->faker->paragraph(5) ,
            'date'  =>  $this->faker->dateTimeBetween('-5 months'),
            'platform'   => $this->faker->randomElement($array =["whatsapp","facebook",]),
        ];
    }
}
