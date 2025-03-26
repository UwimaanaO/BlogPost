<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    //Logged in user post
    $posts=[];
    if (auth()->check()) {
        $posts = auth()->user()->post()->latest()->get();
    }
    // All posts
    //$posts= Post::where('user_id',auth()->id()->get());
    return view('home', ['posts' => $posts]);
});
//User Controller
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);
//Blog Post Controller
Route::post('/create_post', [PostController::class, 'createPost']);