<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpFormRequest;
use App\Models\User;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller{
    public function index(){
        return view('signup.index');
    }
    public function register(SignUpFormRequest $request){
        $info = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        );
        $user = User::create($info);
        return redirect('/login');
    }
}
