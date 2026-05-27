<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WeightLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            'weight' => $this->faker->randomFloat(1, 50, 85),
            'calories' => $this->faker->numberBetween(1500, 2500),
            'exercise_time' => $this->faker->time('H:i'),
            'exercise_content' => $this->faker->realText(50),
        ];
    }
}
