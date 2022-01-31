<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class paginationcontroller extends Controller
{
    public function allUser(){
        $user=User::paginate(10);
        return view('pages/users2',compact('user'));
    }
}
