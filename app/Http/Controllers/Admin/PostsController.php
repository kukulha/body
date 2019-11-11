<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Post;
use App\Category;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'DESC')->pluck('name', 'id');
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post = Post::create(request()->all());

        if (request()->hasFile('file')) {
            $filename = 'fl'.$request->slug.'_'.time().'.'.request()->file('file')->getClientOriginalExtension();
            request()->file->storeAs('public', $filename);

            $post->file = $filename;
            $post->save();
        }

        if ($request->hasFile('featured'))
        {
            $filename = 'ft'.$request->slug.'_'.time().'.'.request()->file('featured')->getClientOriginalExtension();
            request()->featured->storeAs('public', $filename);

            $post->featured = $filename;
            $post->save();
        }


        return redirect()->route('posts.index')->with('info', 'Articulo creado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::orderBy('name', 'DESC')->pluck('name', 'id');
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\PostUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
        $post->update(request()->all());

        if (request()->hasFile('file')) {
            $filename = 'fl'.$request->slug.'_'.time().'.'.request()->file('file')->getClientOriginalExtension();
            request()->file->storeAs('public', $filename);

            $post->file = $filename;
            $post->save();
        }

        if ($request->hasFile('featured'))
        {
            $filename = 'ft'.$request->slug.'_'.time().'.'.request()->file('featured')->getClientOriginalExtension();
            request()->featured->storeAs('public', $filename);

            $post->featured = $filename;
            $post->save();
        }

        return redirect()->route('posts.index')->with('info', 'Articulo editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('info', 'Articulo eliminado correctamente');
    }
}
