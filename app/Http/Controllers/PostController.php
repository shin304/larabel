<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Translation;

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
        $language = ["英語", "日本語"];

        $translate = [
            "apple" => "りんご" ,
            "orange" => "みかん" ,
            "banana" => "バナナ"
        ];

        return view('table', compact('language','translate'));
    }

    public function index()
    {
        $languages = ["英語", "日本語"];

        $translations = Translation::all();
        return view('index',compact('languages','translations'));
    }
}
