<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index (Request $request)
    {
        $user = Auth::user();

        return view("profile",[
            "user" => $user
        ]);
    }

    public function edit () {   
        return view("editProfile", [
            "user" => auth()->user()
        ]);
    }

    public function update (Request $request) {
        dd($request);
    }
}
