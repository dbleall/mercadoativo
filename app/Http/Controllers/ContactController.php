<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;


class ContactController extends Controller
{
    
    public function sendEmail(Request $request){
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject, 
            'message' => $request->message
        ];

        Mail::to('mercadoativo@mercadoativo.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Sua mensagem foi enviada com sucesso');
    }
}
