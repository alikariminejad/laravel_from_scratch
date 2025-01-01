<?php

namespace App\Http\Controllers;
use App\Events\SaleCreated;
use App\Models\Sale;
use Illuminate\Http\Request;

class CheckoutController extends Controller{
    public function index(){
        return view('checkout.index');
    }
    public function store(Request $request){
        $sale = Sale::create([
            'first_name' => $request -> input('first_name'),
            'last_name' => $request -> input('last_name'),
            'email' => $request -> input('email'),
            'address' => $request -> input('address'),
            'zip' => $request -> input('zip'),
        ]);
        SaleCreated::dispatch($sale);
    }
}
