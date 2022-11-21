<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index () {
        return view("auth.register");
    }

    public function register (userRequest $request) {
        $user = [
            "name" => $request->name,
            "username" => $request->username,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ];

        User::create($user);
        return redirect("/login");
    }
}
