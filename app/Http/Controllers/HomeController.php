<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller{
    //
    public function index(){
        $title = '<h2>Welcome to Controller</h2>';
        return view('index', compact('title'));
    }
}
