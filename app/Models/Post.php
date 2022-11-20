<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "title",
        "slug",
        "body"
    ];

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
