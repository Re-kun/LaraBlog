<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        "image"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function posts () {
        return $this->hasMany(Post::class);
    }
    
    public function getRouteKeyName(){
        return "username";
    }
    
    // Follow
    public function follow (User $user) {
        return $this->follows()->save($user);
    }

    public function follows(){
        return $this->belongsToMany(User::class, "follows", "user_id", 'following_user_id' )->withTimestamps();
    }
    
    public function follower(){
        return $this->belongsToMany(User::class, "follows", "following_user_id", 'user_id' )->withTimestamps();
    }

    public function hasFollow (User $user) {
        return $this->follows()->where("following_user_id", $user->id)->exists();
    }

    public function unfollow(User $user){
        return $this->follows()->detach($user);
    }
}
