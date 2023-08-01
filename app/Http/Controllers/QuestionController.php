<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuestionController extends Controller
{
    public function fetchInsert(){
        $response = Http::get('https://quizapi.io/api/v1/questions', [
        'apiKey' => '2pi8MSMiCAywRm9xbabJS1uXWEv5Eh72cZ3ePQYx',
        'limit' => 100
    ]);
        $questions = json_decode($response->body());
        foreach ($questions as $q) {
            $question = new Question();
            $question->question = $q->question;
            $question->answer_a = $q->answers->answer_a;
            $question->answer_b = $q->answers->answer_b;
            $question->answer_c = $q->answers->answer_c;
            $question->save();
        }

        return "Data fetched from Quiz Api and inserted successfully!";
    }



    public function show()
    {
        $data['questions']= Question::all();

        return view('quiz', $data);
    }
}