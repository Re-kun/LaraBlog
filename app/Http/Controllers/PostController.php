<?php

namespace App\Http\Controllers;

use App\Http\Requests\postRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct(){
        return $this->middleware("auth")->except("index", "show");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("post.create",[
            "categories" => Category::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(postRequest $request)
    {
        $newPost = [
            "user_id" => Auth::user()->id,
            "category_id" => $request->category_id,
            "title" => $request->title,
            "slug" => $request->slug,
            "body" => $request->body
        ];

        if($request->file("image")){
            $newPost["image"] = $request->file("image")->store("post-images");
        }

        Post::create($newPost);
        return redirect("/profile");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view("post.edit",[
            "post" => $post,
            "categories" => Category::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(postRequest $request, Post $post)
    {   
        $updatePost = [
            "category_id" => $request->category_id,
            "title" => $request->title,
            "body" => $request->body
        ];

        if ($post->slug != $request->slug) {
            $updatePost["slug"] = $request->slug;
        }

        if ($request->file("image")) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $updatePost["image"] = $request->file("image")->store("post-images");
        }   

        Post::find($post->id)->update($updatePost);
        return redirect("/profile");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // Remove image
        Storage::delete($post->image);

        Post::find($post->id)->delete();
        return redirect("/profile");
    }
}
