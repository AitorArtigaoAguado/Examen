<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contact(){
        return view('email');
    }
    
    public function sendEmail(Request $request){
        $details=[
            'name'=> $request->name,
            'email'=> $request->email,
            'telefono'=> $request->telefono,
            'msg'=> $request->msg
        ];
        
        Mail::to('aartigaoaguado@iessonferrer.net')->send(new ContactMail($details));
        return back()->with('message_sent', 'Se ha enviado con exito');
    }
}
