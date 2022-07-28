<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personals>
 */
class PersonalsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first(),
            'gender' => fake()->randomElement(['man','other']),
            'age' => fake()->numerify('##'),
            'created_surveys_count' => fake()->numerify('##'),
            'filled_surveys_count' => fake()->numerify('##'),
        ];
    }
}
