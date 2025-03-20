<?php

use app\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/search', [BookController::class, 'search'])->name('search');

Route::get('/books/{id}', [BookController::class, 'show'])->name('book');



Route::get('/user', [UserController::class, 'index'])->name('user');
