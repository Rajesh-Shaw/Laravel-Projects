<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function (){
    return view('pages.about');
});

Route::get('/contact', function(){
    return view('pages.contact');
});

Route::get('/user/{name}', function($name){
    return view('pages.user', compact('name'));
});

Route::get('/post/{id}', function ($id){
    return view('pages.post', ['id' => $id]);
});