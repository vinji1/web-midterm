<?php

namespace Database\Factories;

use App\Models\BoholWeather;
use Illuminate\Database\Eloquent\Factories\Factory;

class BoholWeatherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BoholWeather::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'town' => $this->faker->word,
        'temperature' => $this->faker->word,
        'humidity' => $this->faker->word,
        'weather_status' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
