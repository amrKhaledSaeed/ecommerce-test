<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phone;
use App\User;
class UserController extends Controller
{
    public function index(Request $request){
        return $request->path();
    }

    public function insertRecord(){
        $phone=new phone();
        $phone->phone='01130155202';
        $user=new User();
        $user->name='mohamed';
        $user->email='ahmeds@gmail.com';
        $user->password=encrypt('secret');
        $user->save();
        $user->phone()->save($phone);
        return 'recorde has been created success';
    }
    public function getUserPhone($id){
        $phone=User::find($id)->phone;
        return $phone;
    }
}
