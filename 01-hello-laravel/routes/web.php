<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\WelcomeController;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function(){
    return "Hello Laravel!";
});

Route::get('/hello-controller', [HelloController::class, 'index']);
Route::get('/hello', [HelloController::class, 'hello']);
Route::get('welcome',[WelcomeController::class, 'index']);
