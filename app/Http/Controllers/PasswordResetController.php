<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordResetController extends Controller{
    public function index(){
        $title = "Reset Password";
        return view('password-forgot.index', compact('title'));
    }
}