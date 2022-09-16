<?php

namespace App\Interfaces;

use App\Models\Survey;
use App\Models\Question;
use App\Models\Question_answer;

interface CreateSurveysInterface
{
    public function createSurvey(object $validated): Survey;
    public function createQuestion(object $validated): Question;
    public function createAnswer(object $validated): Question_answer;
    public function store(object $validated);
}
