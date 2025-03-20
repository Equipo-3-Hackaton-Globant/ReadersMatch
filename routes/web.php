<?php

use app\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [BookController::class, 'index'])->name('home');

Route::get('/bookdetails', function() {
    return view('bookdetails');
})->name('bookdetails');
