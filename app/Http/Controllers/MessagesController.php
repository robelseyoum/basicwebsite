<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    //creating function 

    public function submit(Request $request) {
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        // Create New Message
        $message = new Message;

        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        //Save Message
        $message->save();

        //after the record stored to the database it will redirect into homepage
        return redirect('/')->with('success', 'Message Sent');
    }

    public function getMessages(){
        
        $messages = Message::all();

        return view('messages')->with('messages', $messages);
    }
}
