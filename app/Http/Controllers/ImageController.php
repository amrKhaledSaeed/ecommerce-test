<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class ImageController extends Controller
{
    public function resizImage(){
        return view('pages/resiz-image');
    }

    public function resizeImageSubmit(Request $request){
      $image=$request->file;
      $fileName=$image->getClientOriginalName();
      $imageResize=Image::make($image->getRealpath());
      $imageResize->resize(300,300);
      $imageResize->save(public_path('images/'.$fileName));
      return 'image hase been resized successefully';
    }
}
