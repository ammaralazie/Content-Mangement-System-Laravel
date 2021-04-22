<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategorysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   $data=Category::all();
        return view('categories.index')->with('obj',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
           "name"=>'required',
       ]);
        $category=new Category();
        $category->name=$request->name;
        $category->save();
        return redirect()->back();


      // dd($request->all());
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
    public function edit(Request $request,$id)
    {
        $category=new Category();
        $data=$category::find($id);

            return view('categories.edit')->with('obj',$data);
    }

        //return view('categories.edit')->with('obj',$data);


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category=new Category();
        $data=$category::find($id);
        $data->name=$request->name;
        $data->save();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=new Category();
        $data=$category::find($id);
        $data->delete();
        return redirect()->route('category.index');
    }
}
