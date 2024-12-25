<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;




class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $posts = Post::all();
//        $posts = Post::latest()->get();
//        $posts = Post::orderby('created_at', 'DESC')->get();
        $posts = DB::table('posts')-> orderBy('id','DESC') -> get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
//        dd($request -> all());
        $request -> validate([
            'title' => ['required', 'string', 'min:3', 'unique:posts,title'],
            'description' => ['nullable', 'string'],
        ]);
        Post::create([
            'title' => $request-> input('title'),
            'slug' => Str ::slug($request->input('title'), '-' ),
            'description' => $request-> input('description'),
        ]);
//        DB::insert([
//            'title' => $request->input('title'),
//            'description' => $request->input('description'),
//        ]);
//        Post::insert([
//            'title' => $request-> input('title'),
//            'desctription' => $request-> input('desctription'),
//            'created_at' => now(),
//            'updated_at' => now()
//        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        return view('posts.update', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request -> validate([
            'title' => ['required', 'string', 'min:3', 'unique:posts,title,'. $post->id],
            'description' => ['nullable', 'string'],
        ]);
        $post -> title = $request -> input('title');
        $post -> description = $request -> input('description');
        $post -> update();
        return redirect() -> back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post -> delete();
        return redirect() -> back();
    }
}
