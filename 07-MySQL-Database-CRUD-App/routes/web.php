<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert-post', [PostController::class, 'create']);
Route::get('/posts', [PostController::class, 'index']);