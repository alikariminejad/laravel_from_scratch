<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller{
    public function index(){
        $title = 'Create Account';
        return view('register.index', compact('title'));
    }
}