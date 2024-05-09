<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome', ["title" => "Homepage"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});

Route::get('/posts', function () {
    return view('posts', ["title" => "Posts", "posts" => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {

    $post = Post::find($slug);

    return view('post', ["title" => "Single Post", "post" => $post]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});
