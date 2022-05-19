<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Word>
 */
class WordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'english_word' => $this->faker->text(10),
            'russian_word' => $this->faker->text(10),
            'day_id' => $this->faker->numberBetween(1, 11),
        ];
    }
}
