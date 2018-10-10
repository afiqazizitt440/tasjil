<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
    	//return $request->input('name');
    	//validation
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required'
    		
    	]);
    	
    	//create bew message
    	$message = new Message;
    	$message->name = $request->input('name');
    	$message->email = $request->input('email');
    	$message->message = $request->input('message');

    	//save massage
    	$message->save();

    	//redirect
    	return redirect('/')->with('success2', 'Message Sent');
    }

    public function getMessages()
    {
    	$messages = Message::all();

    	return view('messages')->with('messages', $messages);

    }
}
