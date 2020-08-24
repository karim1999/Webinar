<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class WebinarController extends Controller
{
    //
    public function register(){
        return view('register', [
            "setting" => Setting::findOrFail(1)
        ]);
    }
    public function event(){
        return view('event');
    }
}
