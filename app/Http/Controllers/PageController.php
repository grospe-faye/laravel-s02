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
        $title = 'About Page';
        return view('pages/about')->with('title', $title);
    }

    public function services(){
         $data = array(
            'title' => 'Services Page',
            'services' => ['Web Design', 'Development', 'SEO']
        );
        return view('pages/services')->with($data);
    }
}
