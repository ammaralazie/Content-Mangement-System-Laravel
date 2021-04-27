<?php

namespace App\Http\Controllers;

use App\Category;
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
        return view('home')->with('user',$user)
        ->with('category',$category);
    }
}
