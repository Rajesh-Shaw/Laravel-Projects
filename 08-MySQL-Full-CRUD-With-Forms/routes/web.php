<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('posts', PostController::class);
