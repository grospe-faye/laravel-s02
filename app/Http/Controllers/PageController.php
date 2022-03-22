<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // passing a single value to a view
    /*public function hello(){
        return view('hello')->with('name', 'Homer Simpson');
    }*/

    // Passing multiple values
    public function hello(){
        $info = array(
            'front_end' => 'Zuitt Coding Bootcamp',
            'topics' => ['HTML & CSS', 'JS', 'React']
        );
        return view('hello')->with($info);
    }

    public function index(){
        $title = 'Welcome to Laravel';
        return view('pages/index')->with('title', $title);
    }

    public function about(){
        return view('pages/about');
    }

    public function services(){
        return view('pages/services');
    }
}
