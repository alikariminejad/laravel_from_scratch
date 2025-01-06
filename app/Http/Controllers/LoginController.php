<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{
    public function index() {
        $title = 'Login';
        return view('auth.login', compact('title'));
    }
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $credentials = array('email' => $email, 'password' => $password);
        if (Auth::attempt($credentials))
            return redirect()->intended('/posts.index');
        else
            return redirect() -> back() -> withInput() -> withErrors('Invalid email or password');


    }
}
