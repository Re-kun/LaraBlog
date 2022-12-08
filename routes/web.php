<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware("guest")->group(function () {
    // // authentication
    Route::get("/login", [LoginController::class, "index"])->name("login");
    Route::post("/login", [LoginController::class, "login"]);
    Route::get("/register", [RegisterController::class, "index"]);
    Route::post("/register", [RegisterController::class, "register"]);
});

Route::middleware("auth")->group(function () {
    Route::post("/logout", LogoutController::class);
    Route::get("/profile", [ProfileController::class, "index"])->name("profile");
    Route::get("/profile/edit", [ProfileController::class, "edit"])->name("profile.edit");
    Route::put("/profile", [ProfileController::class, "update"])->name("profile.update");
    Route::resource("/post", PostController::class)->except(["index"]);
    Route::post("/follow/{user:username}", [FollowsController::class, "follow"] )->name("follow");
});

Route::view('/', "home")->name("home");
Route::view('/about', "about")->name("about");
Route::get("/blog", BlogController::class)->name("blog");
Route::resource("/category", CategoryController::class);
Route::resource("/user", UserController::class);