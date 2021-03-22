<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Welcome to Musigent';
        $post = Post::latest()->paginate(6);
        return view('pages.welcome', compact('post','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($slug)
    // {
    //     $title = "Single Post";
    //     $post = Post::where('slug', $slug)
    //         ->firstOrFail()
    //     ;
    //     return view ('post.single', compact('post','title'));
    // }

    public function show(Category $category, Post $post)
    {
        $title = "Single Post";
        return view('creator.single', compact('title','category','post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $title = "Search Result";
        $query = $request->input('query');

        $search = Post::where('title', 'like', "%$query%")->paginate(15);
        return view('pages.search-results',compact('title'))->with('search', $search);
    }

    public function key(Request $request, $category=null)
    {
        if($category){
            $categories = Category::with('posts')->latest()->get();
            $category = Category::where('url', '=', $category)->first();
            $posts = Post::latest()->paginate(15);
            $posts = $category ? $category->posts()->latest()->paginate(15): [];

        }else{
            $category = Category::where('name', '=', $category)->first();
            $posts= Post::latest()->paginate(15);
            $categories = Category::with('posts')->latest()->get();
        }
        return view('pages.category',compact('category', 'categories', 'posts'));
    }
}
