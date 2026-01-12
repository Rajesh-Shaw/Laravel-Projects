<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return "Hello from Controller!";
    }

    public function hello()
    {
        return view('hello');
    }
}
