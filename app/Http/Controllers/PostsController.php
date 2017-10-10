<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Gate;

class PostsController extends Controller
{
    public function index()
    {  
        //$posts = Post::where('user_id', auth()->user()->id)->get();
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function update($idPost)
    {
        $post = Post::find($idPost);
        //$this->authorize('update-post', $post);
        if(Gate::denies('update-post',$post))
        abort(403,'Permissão Negada');
        return view('posts/post-update',compact('post'));
    }
}
