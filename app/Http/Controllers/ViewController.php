<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        $title = 'Bootstrap Conversion';
        return view('views.index', compact('title'));
    }
    // public function index(){
    //     $data['title']='Learning About View';
    //     $data['description'] = '<h1>why do we use it?</h1>Lorem Ipsum is simply dummy text of the printing';
    //     $data['comment'] = "<script>alert('Hello You are hacked')</script>";
    //     return view('views.index', $data);
    // }

}
