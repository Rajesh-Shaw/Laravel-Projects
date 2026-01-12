<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServicesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PageController::class, 'home']);
Route::get('/about',[PageController::class, 'about']);
Route::get('/contact',[PageController::class, 'contact']);

Route::get('/user/{name}', function ($name)
{
    return "Hello, " . $name;
});

Route::get('/profile/{name}', [PageController::class, 'user']);

Route::get('/greet/{name?}', function($name = 'Guest'){
    return 'Hello ' . $name;
});

Route::get('/post/{id}', function($id){
    return "Post ID: " . $id;
})->where('id', '[0-9]+');


Route::get('/dashboard', function(){
    return "Dashboard";
})->name('dashboard');

Route::get('services', [ServicesController::class, 'index']);
Route::get('/product/{id}', function($id) {
    return "Product ID: " . $id;
})->where('id', '[0-9]+');