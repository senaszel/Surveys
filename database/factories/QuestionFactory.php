<?php

namespace Database\Factories;

use App\Models\Question_type;
use App\Models\Survey;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'survey_id' => Survey::inRandomOrder()->first(),
            'question_type_id' => Question_type::inRandomOrder()->first(),
            'image_url' => fake()->url(),
        ];
    }
}
