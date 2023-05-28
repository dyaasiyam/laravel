<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
    
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index')
        ->with('posts', Post::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'des'=>'required',
            'image'=>'required|mimes:jpg,png|max:5048',



        ]);
        $slug = Str::slug($request->title , '-');
        $newImageName =uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->mov(public_path('images'), $newImageName);



        Post::create([
            'title'=>$request->input('title'),
            'des'=>$request->input('des'),
            'slug'=>('slug'),
            'image_path' =>$newImageName,
            'user_id'=> auth()->user()->id

        ]);
        return redirect('/blog');


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
        //
    }
}
