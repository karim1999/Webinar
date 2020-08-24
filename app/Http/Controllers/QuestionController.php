<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Option;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function submitForm(Request $request){
        $questions= Question::all();
        foreach ($questions as $question){
            $answer= new Answer();
            $answer->answer= $request->post('question_'.$question->id);
            $question->answers()->save($answer);
        }
        return "done";
    }
    public function submit_polls($id){
        $option= Option::findOrFail($id);
        $option->votes= $option->votes+1;
        $option->save();
        return "done";
    }
}
