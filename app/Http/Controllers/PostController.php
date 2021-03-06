<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->town = $request->town;
        $post->capacity = $request->capacity;
        $post->code = $request->code;
   
        $post->save();
        return redirect()->route('post.index');

        return redirect()->route('post.index')->with('success_message', 'Sekmingai įrašytas.');
       return redirect()->route('post.index')->with('success_message', 'Sėkmingai pakeistas.');
       return redirect()->route('post.index')->with('success_message', 'Sekmingai ištrintas.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->town = $request->town;
        $post->capacity = $request->capacity;
        $post->code = $request->code;

        $post->save();
       return redirect()->route('post.index');

       return redirect()->route('post.index')->with('success_message', 'Sekmingai įrašytas.');
       return redirect()->route('post.index')->with('success_message', 'Sėkmingai pakeistas.');
       return redirect()->route('post.index')->with('success_message', 'Sekmingai ištrintas.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        
        $post->delete();
        return redirect()->route('post.index');

        return redirect()->route('post.index')->with('success_message', 'Sekmingai įrašytas.');
        return redirect()->route('post.index')->with('success_message', 'Sėkmingai pakeistas.');
        return redirect()->route('post.index')->with('success_message', 'Sekmingai ištrintas.');
 
    }
}
