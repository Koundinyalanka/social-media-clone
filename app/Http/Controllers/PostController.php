<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all()->sortByDesc('created_at');
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:140',
        ]);

        $post = new Post();
        $post->user_id = auth()->user()->id;
        $post->body = $request->body;
        $post->save();

        return response('Post Saved', 200);
    }

}
