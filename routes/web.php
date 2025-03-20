<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/bookdetails', function() {
    return view('bookdetails');
})->name('bookdetails');

Route::get('/profile', function() {
    return view('profile');
})->name('profile');
