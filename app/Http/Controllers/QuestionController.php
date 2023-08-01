<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuestionController extends Controller
{
    public function fetchInsert(){
        $response = Http::get('https://quizapi.io/api/v1/questions -G',[
            
             'apiKey'  =>'2pi8MSMiCAywRm9xbabJS1uXWEv5Eh72cZ3ePQYx',
              'limit'=> 10
        ]);
        return $response;
    }

    public function show(){

        $data['questions']= Question::all();
        
        return view('welcome', $data);
    }
}