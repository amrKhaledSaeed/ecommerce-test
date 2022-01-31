<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function getSessionData(Request $request){
        if($request->session()->has('name')){
            echo $request->session()->get('name');
        }else{
            echo "no data in this session";
        }
    }

    public function storeSessionData(Request $request){
        $request->session()->put('name','mohamed');
        echo "data has been added in session";
     }

    public function deleteSessionData(Request $request){
       $request->session()->forget('name');
       echo "data has been deleted in session";
    }






}//end class
