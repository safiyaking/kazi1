<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts=Post::all();
        //$posts=Post::orderBy('title','desc')->get();
        //return Post::where('title','post two')->get();
        //$posts=DB::select("SELECT * FROM posts");
        //$posts= Post::orderBy('title','desc')->take(1)->get();
        $posts= Post::orderBy('created_at','desc')->paginate(1);
        return view('posts.index')->with('posts',$posts);
    }
}