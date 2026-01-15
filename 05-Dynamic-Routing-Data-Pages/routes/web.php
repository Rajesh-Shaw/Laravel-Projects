<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DynamicPageController;

Route::get('/user/{name}', [DynamicPageController::class, 'user']);
Route::get('/profile/{username}', [DynamicPageController::class, 'profile']);

Route::get('/post/{id}', [DynamicPageController::class, 'post'])->whereNumber('id');
Route::get('/greet/{name?}', [DynamicPageController::class, 'greet']);