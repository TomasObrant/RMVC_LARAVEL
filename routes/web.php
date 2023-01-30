<?php

use App\Http\Controllers\PostController;
use App\RMVC\Route\Route;

Route::get('/posts', [PostController::class, 'index'])->name('posts.index')->middleware('');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store')->middleware('');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')->middleware('');

