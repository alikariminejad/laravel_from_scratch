<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', function(){
    return 'Login Page';
})->name('login');

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
