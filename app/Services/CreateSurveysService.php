<?php

namespace App\Services;

use App\Interfaces\CreateSurveysInterface;
use App\Models\Survey;
use App\Models\Question;
use App\Models\Question_answer;

class CreateSurveysService implements CreateSurveysInterface {

    public function createSurvey(object $validated): Survey {
        return Survey::create([
            'user_id' => $validated->user_id,
            'survey_type_id' => $validated->survey_type_id,
            'title' => $validated->title,
        ]);
    }
    
    public function createQuestion(object $validated): Question {
        return Question::create([
            'survey_id' => $validated->survey_id,
            'question_type_id' => $validated->question_type_id,
            'image_url' => $validated->image_url,
        ]);
    }

    public function createAnswer(object $validated): Question_answer {
        return Question_answer::create([
            'question_id' => $validated->question_id,
            'content' => $validated->content,
            'image_url' => $validated->image_url,
        ]);
    }

    public function store($request) {
        $survey = json_decode(json_encode($request->all()));
        $rez="<h4>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h4>";
        if(isset($survey->title)){
            $rez .= "<h1>{$survey->title}</h1>"."<h4>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h4>";
        };
        if (isset($survey->questions)){
            foreach ($survey->questions as $index=>$question) {
                if ($question->type == 'open'){
                    $rez.="pytanie #".($index)
                    ."<h3>(typu {$question->type})</h3>"
                    ."<h3>treść pytania: {$question->question->name}</h3>";
                    $rez.="<h4>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h4>";
                }
                else if ($question->type == 'trueOrFalse'){
                    $rez.="pytanie #".($index)
                    ."<h3>(typu {$question->type})</h3>"
                    ."<h3>treść pytania: {$question->question->name}</h3>"
                    ."<h3>mozliwa odpowiedz: {$question->answers->true}</h3>"
                    ."<h3>mozliwa odpowiedz: {$question->answers->false}</h3>";
                    $rez.="<h4>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h4>";
                }
                else if ($question->type == 'abcd'){
                    $rez.="pytanie #".($index)
                    ."<h3>(typu {$question->type})</h3>"
                    ."<h3>treść pytania: {$question->question->name}</h3>"
                    ."<h3>mozliwa odpowiedz: {$question->answers->a}</h3>"
                    ."<h3>mozliwa odpowiedz: {$question->answers->b}</h3>"
                    ."<h3>mozliwa odpowiedz: {$question->answers->c}</h3>"
                    ."<h3>mozliwa odpowiedz: {$question->answers->d}</h3>";
                    $rez.="<h4>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h4>";
                }
            }
        };
        return $rez ?? 'empty';
    }
}

