<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;

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
        $data = Post::all();
        return view('posts.index')->with('obj', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        $datatag=Tag::all();
        if($data->count()==0){
            return redirect()->route('category.create');
        }//end iff
        if( $datatag->count()==0){
            return redirect()->route('tag.create');
        }//end if

        return view('posts.create')->with('obj', $data)->with('datatag',$datatag);


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
        $this->validate($request, [
            'title' => "required",
            'content' => "required",
            'category_id' => "required",
            'avater' => "required|image",
            'category_id' => "required",
            'tagename' => "required",
            ]);
        $image = $request->avater;
        $image_new = rand(1, 1000000) . time() . $image->getClientOriginalName();
        $image->move('media/posts', $image_new);
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'featured' => 'media/posts/' . $image_new,
            'slug' => str_slug($request->title)
        ]);
        $post->tags()->attach($request->tagename);

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
        $data = Post::find($id);
        $categories = Category::all();
        $tagsname=Tag::all();

        return view('posts.edit')->with('obj', $data)
        ->with('categories', $categories)
        ->with('tagsname',$tagsname);
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
        //dd( $request->all());
        $obj=Post::find($id);
        $this->validate($request, [
            'title' => "required",
            'content' => "required",
            'category_id' => "required",
        ]);
        if ($request->hasFile($request->avater)) {
            $image = $request->avater;
            $image_new = rand(1, 100000) . time() . $image->getClientOriginalNam();
            $image->move('media/posts', $image_new);
            $obj->featured=$image_new;
        } //end if


        $obj->title = $request->title;
        $obj->content = $request->content;
        $obj->category_id = $request->category_id;
        $obj->slug =str_slug($request->title);
        $obj->save();
        $obj->tags()->sync($request->tagename);

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Post::find($id);
        $obj->delete();
        return redirect()->back();
    }

    public function trash()
    {
        $data = Post::onlyTrashed()->get();
        return view('posts.post_trashed')->with('obj', $data);
    }


    public function hdelete($id)
    {
        $obj = Post::withTrashed()->where('id', $id)->first();
        $obj->forceDelete();
        return redirect()->back();
    }

    public function re_store($id)
    {
        $obj = Post::withTrashed()->where('id', $id)->first();
        $obj->restore();
        return redirect()->route('post.index');
    }
}
