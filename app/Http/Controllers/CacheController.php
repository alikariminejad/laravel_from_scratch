<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller{
    public function index(){
        // Cache::put('user_email', 'kariminejad@gmail.com', now()->addMinutes(10));
        // // echo Cache::get('user_email_232323', 'info@gmail.com');
        // // echo Cache::get('user_email');
        // Cache::add('user_email', 'new@gmail.com');
        // echo Cache::get('user_email') . '<br/>';
        // Cache::forever('user_email_1', 'user_1@example.com');
        // echo Cache::get('user_email_1', );
        // Cache::forget('user_email_1');
        // Cache::flush();
        \cache() -> put('user_email', 'info@example.com', now()->addDays(5));
        // echo \cache() -> forget('user_email');
        echo \cache() -> get('user_email');
}
}