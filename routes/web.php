<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostsController::class, 'index'])->name('home');
Route::get('/posts/{post}', [PostsController::class, 'show'])->name('show');

Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);
