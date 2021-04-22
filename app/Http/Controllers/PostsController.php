<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
class PostsController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Post::all();
        return view('posts.index')->with('obj',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Category::all();
        return view('posts.create')->with('obj',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #dd($request->all());
        $this->validate($request,[
            'title'=>"required",
            'content'=>"required",
            'category_id'=>"required",
            'avater'=>"required|image",
        ]);
        $image=$request->avater;
        $image_new=rand(1,1000000).time().$image->getClientOriginalName();
        $image->move('media/posts',$image_new);
        $post=Post::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'category_id'=>$request->category_id,
            'featured'=>'media/posts/'.$image_new,
            'slug'=>str_slug($request->title)
        ]);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
       $obj=Post::find($id);
       $obj->delete();
       return redirect()->back();
    }
}
