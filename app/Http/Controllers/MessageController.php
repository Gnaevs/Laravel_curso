<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessageController extends Controller
{
    public function store(){
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:6'
        ],[
            'name.required' => __('I need your name')
        ]);

        //Envio de email
        
        Mail::to('Gnaevs@gmail.com')->queue(new MessageReceived($message));
        
        //return new MessageReceived($message);

        return back()->with('status','Recibimos tu mensaje, te reponderemos en menos de 24 horas');
    }
}
