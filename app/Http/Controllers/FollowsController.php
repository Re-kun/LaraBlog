<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FollowsController extends Controller
{
    public function follow (User $user) {

        if(Auth::user()->hasFollow($user)){
            Auth::user()->unfollow($user);
        }else {
            Auth::user()->follow($user);
        }

        return back();
    }
}
