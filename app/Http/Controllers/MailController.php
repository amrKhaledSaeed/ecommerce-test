<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){
        $details=[
            'title'=>'email from amr',
            'body'=>'this is for test mail',
        ];

        Mail::to('kamr26710@gmaol.com')->send(new TestMail($details));
        return 'email send';
    }
}
