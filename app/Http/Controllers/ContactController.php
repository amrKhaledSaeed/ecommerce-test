<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('pages/contact-us');
    }
    public function sendMail(Request $request){
        $details=[
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
        ];
        Mail::to('kamr26710@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','your message has been sent successfully');
    }
}
