<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ClintController extends Controller
{
    public function getAllPost(){
        $respons=HTTP::get('https://jsonplaceholder.typicode.com/posts');
        return $respons->json();
    }
    public function addPost(){
        $respons=HTTP::post('https://jsonplaceholder.typicode.com/posts',[
            'userId'=>1,
            'title'=>'New post',
            'body'=>'New Post Description'
        ]);
        return $respons->json();

    }
    public function updatePost(){
        $respons=HTTP::put('https://jsonplaceholder.typicode.com/posts/1',[
            'title'=>'Update post',
            'body'=>'Update Post Description'
        ]);
        return $respons->json();

    }
    public function deletePost($id){
        $respons=HTTP::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $respons->json();

    }
}
