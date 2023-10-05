<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SavePostRequest;


class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' => ['index', 'show']]);
    }

    public function index()
    {

        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create', ['post' => new post]);
    }

    public function store(SavePostRequest $request)
    {


        Post::create($request->validated());


        // return to_route('posts.index')->witch('status', 'Post creado');
        return redirect()->route('posts.index')->with('status', 'Post creado');

    }

    public function edit(Post $post)
    {

        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post)
    {



        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        $post->update($request->validated());

        session()->flash('status', 'El post se actualizo correctamente');

        return to_route('posts.show', $post)->with('status', 'El post se actualizo correctamente');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return to_route('posts.index')->with('status', 'Post ELIMINADO');
    }
}
