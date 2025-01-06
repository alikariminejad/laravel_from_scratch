<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ViewController extends Controller
{
    public function index(string $locale = 'de'){
//        if (!in_array($locale, ['de', 'en'])){
//            abort(400);
//        }
        App::setLocale($locale);
        $title = 'Bootstrap Conversion';
        return view('views.index', compact('title'));
    }

    public function about_us(){
        $title = 'About Us';
        return view('views.about', compact('title'));
    }

    public function contact(){
        $title = 'Contact page';
        return view('views.contact', compact('title'));
    }
    // public function index(){
    //     $data['title']='Learning About View';
    //     $data['description'] = '<h1>why do we use it?</h1>Lorem Ipsum is simply dummy text of the printing';
    //     $data['comment'] = "<script>alert('Hello You are hacked')</script>";
    //     return view('views.index', $data);
    // }
}
