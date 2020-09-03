<?php

namespace App\Http\Controllers;

use App\Event;
use App\Guest;
use App\Poll;
use App\Question;
use App\Resource;
use App\Setting;
use App\Speaker;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebinarController extends Controller
{
    //
    public function register(){
        return view('register', [
            "setting" => Setting::findOrFail(1)
        ]);
    }
    public function logout(Request $request){
        Auth::guard('guest')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('webinar.register');
    }
    public function register_guest(Request $request){
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'organization' => 'required',
            'department' => 'required',
            'city' => 'required',
        ]);
        $guest= new Guest();
        $guest->first_name= $request->post('first_name');
        $guest->last_name= $request->post('last_name');
        $guest->email= $request->post('email');
        $guest->mobile= $request->post('mobile');
        $guest->organization= $request->post('organization');
        $guest->department= $request->post('department');
        $guest->city= $request->post('city');
        $guest->save();
        Auth::guard('guest')->login($guest,false);
        return redirect()->route('webinar.event');
    }

    public function event(){
        return view('event', [
            "resources" => Resource::all(),
            "speakers" => Speaker::all(),
            "guests" => Guest::all(),
            "questions" => Question::all(),
            "polls" => Poll::all(),
            "events" => Event::all(),
            "setting" => Setting::findOrFail(1),
            "now" => Carbon::now(),
        ]);
    }
    public function getSetting(){
        return Setting::findOrFail(1);
    }
    public function getQuestionsAndPolls(){
        $answers= auth('guest')->user()->answers->keyBy('question_id');
        $options= auth('guest')->user()->options->keyBy('poll_id');
        $questions= Question::all()->keyBy('id');
        $polls= Poll::with('options')->get()->keyBy('id');
        return [
            "questions"=> $questions,
            "polls"=> $polls,
            "answers"=> $answers,
            "options"=> $options,
        ];
    }
}
