<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact.form');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name'  =>  'required|min:3',
            'email' =>  'required|email',
            'message'=> 'required|min:10',
        ]);
        return view('contact.success', $validated);
    }
}
