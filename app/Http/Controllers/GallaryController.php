<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function gallary(){
        return view('pages/gallary');
    }
}
