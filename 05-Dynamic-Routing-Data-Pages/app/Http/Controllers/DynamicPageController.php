<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynamicPageController extends Controller
{
    public function user($name)
    {
        return view('pages.user', ['name' => $name]);
    }

    public function profile($username)
    {
        return view('pages.profile', compact('username'));
    }

    public function post($id)
    {
        return view('pages.post', ['id' => $id]);
    }

    public function greet($name = 'Guest')
    {
        return view('pages.greet', ['name' => $name]);
    }
}
