<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'homepage' => $this->faker->unique(200)->randomDigit(),
            'text' => $this->faker->text,
            'ip'=>'127.0.0.1',
            'browser'=>'Chrome 107.0.0.0',
        ];
    }
}
