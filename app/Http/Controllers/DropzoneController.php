<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    public function dropzone(){
        return view('pages/dropzone');
    }

    public function dropzoneSubmit(Request $request){
        $image=$request->file('file');
        $imageName=$image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
        return response()->json(['success'=>$imageName]);

    }
}
