<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('pages.login');
    }
    public function loginSupmit(Request $request){
        $validateData=$request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:14'
        ]);
       $email=$request->input('email');
       $pass=$request->input('password');
       return 'email: '.$email.' password: '.$pass;
    }
}
