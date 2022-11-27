<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "category_id",
        "title",
        "slug",
        "image",
        "body"
    ];

    public function scopeFilter ($query, array $search){
        $query->when($search["search"] ?? false, function ($query, $search){
            return $query->where("title", "like", "%" . $search . "%");
        });

        $query->when($search["category"] ?? false, function ($query, $category) {
            return $query->whereHas("category", function ($query) use ($category) {
                return $query->where("slug", "like", "%" . $category . "%");
            });
        });
    }

    public function user (){
        return $this->belongsTo(User::class, "user_id");
    }

    public function category () {
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName(){
        return "slug";
    }

    public function storePost($request) {
        
        $newPost = [
            "user_id" => Auth::user()->id,
            "category_id" => $request->category_id,
            "title" => $request->title,
            "slug" => $request->slug,
            "body" => $request->body
        ];

        if ($request->image){
            $newPost->image = $request->image->store("post-images");
        }

        Post::create($newPost);
    }

    public function updatedPost ($request, $post) {
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
    }
}
