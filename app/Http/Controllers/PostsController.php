<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;


class PostsController extends Controller
{

    public function index()
    {

       $posts = Post::all();

        return view('posts.index',compact('posts'));
    }
    public function allposts()
    {

       $posts = Post::all();

        return view('posts.allposts',compact('posts'));
    }
    public function show($id)
    {
      $posts = Post::find($id);

       return view('posts.show',compact('posts'));
    }

    public function create()
    {
       return view('posts.create');
    }
    public function store()
    {
       $post = new Post;

       $post->title = request('title');

       $post->body = request('body');

       $post->save();

       return redirect('/');
    }

  }
