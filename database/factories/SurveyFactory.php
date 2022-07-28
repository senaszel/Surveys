<?php

namespace Database\Factories;

use App\Models\Survey_type;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Survey>
 */
class SurveyFactory extends Factory
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
            'survey_type_id' => Survey_type::inRandomOrder()->first(),
            'title' => fake()->sentence(1),
            'is_approved' => fake()->boolean(),
            'is_published' => fake()->boolean(),
        ];
    }
}
