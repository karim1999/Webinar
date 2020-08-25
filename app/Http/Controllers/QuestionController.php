<?php

namespace App\Http\Controllers;

use App\Answer;
use App\GuestOption;
use App\Option;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function submitForm(Request $request){
        $questions= Question::all();
        foreach ($questions as $question){
            if($request->post('question_'.$question->id)){
                $answer= new Answer();
                $answer->answer= $request->post('question_'.$question->id);
                $answer->guest_id= auth('guest')->user()->id;
                $question->answers()->save($answer);
            }
        }
        return "done";
    }
    public function submit_polls($id){
        $option= Option::findOrFail($id);
        $option->votes= $option->votes+1;
        $option->save();
        $guestOption= new GuestOption();
        $guestOption->option_id= $option->id;
        $guestOption->guest_id= auth('guest')->user()->id;
        $guestOption->poll_id= $option->poll_id;
        $guestOption->save();
        return "done";
    }
}
