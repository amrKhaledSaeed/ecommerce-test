<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;//to can use library
class FullentController extends Controller
{
    public function index(){
        echo 'fulten strings';
        $slice=str::of('welcom to my youtube chanel')->after('welcom to my');//after to echo after this string
        echo $slice.'<br>';
        $slice2=str::of(' App\Http\Controllers\amr')->afterLast('\\');
        echo $slice2.'<br>';
        $slice3=str::of(' App\Http\Controllers\amr')->append(' add after amr');
        $repeat=str::of('laravel 7')->replace(' 7',' 8');
        echo $repeat.'<br>';
        $convert=str::of('the name amr')->title();//title():function to put first char in evry start word capital
        echo $convert.'<br>';
        $convert=str::of('the name amr')->slug('-');//to convert each space to -
        echo $convert.'<br>';
        $str=str::of('the name amr')->substr(4,4);//to cut char
        echo $str.'<br>';
    }
}
