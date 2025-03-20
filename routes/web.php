<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

Auth::routes();

Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/search', [BookController::class, 'search'])->name('search');

Route::get('/books/{id}', [BookController::class, 'show'])->name('book');

Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/create', [UserController::class, 'create'])->name("create");
Route::post('/create', [UserController::class, 'create'])->name("create");

Route::get('/edit/{id}', [UserController::class, 'edit'])->name("edit");
Route::post('/edit/{id}', [UserController::class, 'edit'])->name("edit");

