<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::get();
        return view('posts.index',['post'=>$posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show',['post'=>$post]);
    } 
    public function create()
    {
        return view('posts.create');
    } 
    public function store( Request $request )
    {
        $request->validate([
            'titulo'=> ['required'],
        ]);
        $post = new Post;
        $post->title=$request->input('titulo');
        $post->save();

        session()->flash('status','Post Creado!');
        return to_route('posts.index');
    }     
}
