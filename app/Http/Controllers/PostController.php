<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $posts = [
            ['title' => 'First post'],
            ['title' => 'Secund post'],
            ['title' => 'Thrid post'],
            ['title' => 'Fourt post'],
        ];

        return view('blog', ['posts' => $posts]);
    }
}
