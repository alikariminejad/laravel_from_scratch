<?php

namespace App\Http\Controllers;

use App\Mail\MarkDownEmail;
use App\Mail\OrderCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index(){
        Mail::to('kariminejad.ali.ak@gmail.com')
            ->cc('kariminejad.ali.ak@gmail.com')
            ->send(new OrderCreated());
    }

    public function markdown_email(){
        Mail::to('kariminejad.ali.ak@gmail.com')
            ->cc('kariminejad.ali.ak@gmail.com')
            ->send(new MarkDownEmail());
    }
}
