<?php

namespace App\Http\Controllers;

use App\Guest;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function index(){
        return Message::with('guest')->get();
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'guest_id' => 'required',
            'message' => 'required',
        ]);
        $message= new Message();
        $message->message= $request->post('message');
        Guest::findOrFail($request->post('guest_id'))->messages()->save($message);
        return Message::with('guest')->get();
    }
}
