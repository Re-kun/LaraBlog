<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
