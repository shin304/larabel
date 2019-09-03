<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function sayHello()
    {
        return view("hello");
    }

    public function message()
    {
        $message = "Hello World";

        return view("message", compact("message"));
    }

    public function table()
    {
        $languages = [
            "英語" => "日本語" ,
            "apple" => "りんご" ,
            "orange" => "みかん" ,
            "banana" => "バナナ"
        ];

        return view('table', compact('languages'));
    }
}
