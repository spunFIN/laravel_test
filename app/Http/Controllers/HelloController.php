<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about(){
        //$hello = "Hello from Controller";

        /*return view('subviews.hello', [
            'hello' => $hello, //compact!
        ]);*/

        //return view('subviews.hello', compact('hello'));

        return view('about');
    }

}
