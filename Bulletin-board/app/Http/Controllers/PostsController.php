<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * 
     * @return Illuminate\Http\Request
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('bbs.index', ['posts' => $posts]);
    }

    /**
     * 
     * @return Illuminate\Http\Request
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('bbs.show', [
            'post' => $post,
        ]);
    }
    // public function show(Request $request, $id)
    // {
    //     $post = Post::findOrFail($id);

    //     return view('bbs.show', [
    //         'post' => $post,
    //     ]);
    // }
}
