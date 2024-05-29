<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

Route::get('/', function () {
    return view('welcome', ["title" => "Homepage"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});

Route::get('/posts', function () {
    return view('posts', ["title" => "Posts", "posts" => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ["title" => "Single Post", "post" => $post]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});

Route::get('/authors', function () {
    return view('authors', ["title" => "Authors Lists", "authors" => User::all()]);
});

Route::get('/authors/{user:username}', function (User $user) {

    return view('posts', ["title" => count($user->posts) . " Articles by " . $user->name, "posts" => $user->posts]);
});

Route::get('/categories', function () {
    return view('categories', ["title" => "Categories Lists", "categories" => Category::all()]);
});

Route::get('/category/{category:slug}', function (Category $category) {

    return view('posts', ["title" => "Category in " . $category->name, "posts" => $category->posts]);
});
