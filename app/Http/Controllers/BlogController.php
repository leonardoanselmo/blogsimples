<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() 
    {
        return view('blog/index');
    }

    public function posts()
    {

        $posts = [

            0 => 'Post 1',
            1 => 'Post 2',
            2 => 'Post 3',
            3 => 'Post 4',
            4 => 'Post 5',

        ];

        return view('blog/posts', compact('posts'));
    }
}
