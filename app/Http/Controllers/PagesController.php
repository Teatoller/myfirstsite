<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() 
    {
        $task = [
            'Go to the store',
            'Go to the market',
            'Go to work',
            'Go home'
        ];
        
        return view('welcome')->withTask($task)->withFoo('foo');
    
        // return view('welcome', [
        //     'task' => $task,
        //     'foo' => 'foobar'
        // ]);
    }

    public function about() 
    {
        return view('about');
    }

    public function contact() 
    {
        return view('contact');
    }
}
