<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller{
    public function index() {
        $title = 'Login';
        return view('auth.login', compact('title'));
    }
}