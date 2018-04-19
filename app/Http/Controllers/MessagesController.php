<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Validator, Input, Redirect; 
use App\Message;



class MessagesController extends Controller {
    public function submit(Request $request){
       $v = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required'
            ]);
        
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        }
        else {
            $message = new Message;
            $message->name = $request->input('name');
            $message->email = $request->input('email');
            $message->message = $request->input('message');
            //save message
            $message->save();
            //redirect
            return redirect('/')->with('success', 'Message Sent');
        }
        public function getMessages(){
            $messages = Message::all();
            return view('messages')->with('messages', $messages);
        }
    }
}
