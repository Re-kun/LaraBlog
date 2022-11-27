<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index () {
        return view("auth.login");
    }

    public function login(loginRequest $request) {

        $credential = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if(Auth::attempt($credential)){
            return redirect("/");
        }

        throw ValidationException::withMessages([
            "error" => "Something wrong i can feel it"
        ]);
    }
}
