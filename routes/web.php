<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

// Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [\App\Http\Controllers\ViewController::class, 'index'])->name('home');
//Route::get('/', [\App\Http\Controllers\ViewController::class, 'index'])->name('home')->middleware('auth');
Route::get('/about-us', [\App\Http\Controllers\ViewController::class,'about_us'])->name('about-us');
Route::get('/contact', [\App\Http\Controllers\ViewController::class,'contact'])->name('contact');


// Route::get('/login', function(){
//     return 'Login Page';
// })->name('login')->middleware('guest');

Route::prefix('user')->name('basics.')->middleware(['web', 'web', 'throttle:4,1'])->group(function(){
    Route::get('/about-us', [\App\Http\Controllers\AboutController::class, 'index'])->name('about-us');
    Route::get('/contact-us', function(){
        return 'Contact Us';
    })->name('contact-us');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware(['guest']) -> group(function(){

    Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])-> name('login');
    Route::get('/create-account', [\App\Http\Controllers\RegisterController::class, 'index']) -> name('create-account');
    Route::get('/password-forgot', [\App\Http\Controllers\PasswordResetController::class, 'index']) -> name('reset-password');
});



Route
::middleware(['auth']) -> group(function(){
    Route::resource('posts', \App\Http\Controllers\PostController::class);
});

Route::get('/cache', [\App\Http\Controllers\CacheController::class, 'index']) -> name('cache');

Route::get('/collections', [\App\Http\Controllers\CollectionController::class, 'index']) -> name('collections');

Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'index']) -> name('checkout');
Route::post('/checkout', [\App\Http\Controllers\CheckoutController::class, 'store']) -> name('checkout') -> name('process-checkout');

