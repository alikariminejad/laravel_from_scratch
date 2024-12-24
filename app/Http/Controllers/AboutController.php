<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $title = '<h2>Welcome to About Controller</h2>';
        return view('about', compact('title'));
    }
}
