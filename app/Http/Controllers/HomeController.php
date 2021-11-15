<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::latest('id')->paginate(20);
        return view('home', ['posts' => $posts]);
    }
    //投稿
    public function create()
    {
        return view('create');
    }
    //詳細
    public function show(int $id)
    {
        $post = Post::findOrFail($id);
        return view('show',compact('post'));
    }
    public function store(PostRequest $request)
    {
        $post = Post::create($request->all());
        return redirect()->route('home', $post);
    }
    //編集
    public function edit(Post $post,int $id)
    {
        $post = Post::findOrFail($id);
        return view('edit', compact('post'));
    }
    public function update(PostRequest $request, Post $post,$id)
    {
        $post = Post::find($id);
        $post->update($request->all());

        return redirect()->route('edit', $post);
    }
    //削除
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('home');
    }

}
