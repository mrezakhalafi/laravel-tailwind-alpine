<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('welcome', ["title" => "Homepage"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});

Route::get('/posts', function () {
    return view('posts', ["title" => "Posts", "posts" => [
        [
            "id" => "1",
            "slug" => "judul-artikel-1",
            "title" => "Judul Artikel 1",
            "author" => "M Reza Khalafi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde totam quis ad rerum iste libero similique, nemo laboriosam aliquam velit quaerat repellendus dolore, incidunt facere nisi cupiditate, dicta doloremque corporis?"
        ],
        [
            "id" => "2",
            "slug" => "judul-artikel-2",
            "title" => "Judul Artikel 2",
            "author" => "M Reza Khalafi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde totam quis ad rerum iste libero similique, nemo laboriosam aliquam velit quaerat repellendus dolore, incidunt facere nisi cupiditate, dicta doloremque corporis?"
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {

    $posts =  [
        [
            "id" => "1",
            "slug" => "judul-artikel-1",
            "title" => "Judul Artikel 1",
            "author" => "M Reza Khalafi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde totam quis ad rerum iste libero similique, nemo laboriosam aliquam velit quaerat repellendus dolore, incidunt facere nisi cupiditate, dicta doloremque corporis?"
        ],
        [
            "id" => "2",
            "slug" => "judul-artikel-2",
            "title" => "Judul Artikel 2",
            "author" => "M Reza Khalafi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde totam quis ad rerum iste libero similique, nemo laboriosam aliquam velit quaerat repellendus dolore, incidunt facere nisi cupiditate, dicta doloremque corporis?"
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ["title" => "Single Post", "post" => $post]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});
