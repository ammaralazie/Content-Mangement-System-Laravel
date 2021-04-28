<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Setting;
use App\User;
use Illuminate\Http\Request;

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
        $user=Setting::first()->blog_name;
        $category=Category::all()->take(5);
        $post1=Post::orderBy('created_at','desc')->first();
        $post2=Post::orderBy('created_at','desc')->skip(1)->take(1)->first();
        $post3=Post::orderBy('created_at','desc')->skip(2)->take(1)->first();
        return view('home')->with('user',$user)
        ->with('category',$category)
        ->with('post1',$post1)
        ->with('post2',$post2)
        ->with('post3',$post3)
        ->with('posts',post::all());

    }
    public function detail($slug){
        $post=Post::where('slug',$slug)->first();
        $user=Setting::first()->blog_name;
        $category=Category::all()->take(5);
        return view('detail_post')->with('post',$post)
        ->with('user',$user)
        ->with('category',$category);
    }
}
