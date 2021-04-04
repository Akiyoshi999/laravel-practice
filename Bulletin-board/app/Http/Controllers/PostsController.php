<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bbs.create');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $savedata = [
            'name' => $request->name,
            'subject' => $request->subject,
            'message' => $request->message,
            'category_id' => $request->category_id,
        ];

        $post = new Post;
        $post->fill($savedata)->save();

        return redirect('/bbs')->with('poststatus', '新規投稿しました');
    }
}
