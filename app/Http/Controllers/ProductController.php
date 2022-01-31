<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $sports=array('football','taekwondo','karate');
        return view('pages.welcome',compact('sports'));
    }
}
