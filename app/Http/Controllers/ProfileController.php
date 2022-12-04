<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $validatedData = $request->validate([
            "name" => "required",
            "username" => "required"
        ]);

        if ($request->file("image")){
            $validatedData["image"] = $request->file("image")->store("profile");
            if(auth()->user()->image) {
                Storage::delete(auth()->user()->image);
            }
        }

        User::find(auth()->user()->id)->update($validatedData);
        return redirect("/profile");
    }
}
