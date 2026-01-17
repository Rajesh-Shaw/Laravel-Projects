<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        Post::create([
            'title' => 'My First Post',
            'content' => 'This is stored in MySQL database'
        ]);
        return 'Post inserted successfully';
    }

    public function index()
    {
        $posts = Post::all();
        return $posts;
    }
}
