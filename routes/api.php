<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/post', function (Request $request) {
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
        // return response()->json($request, 200);
        return $rez ?? 'empty';
});
