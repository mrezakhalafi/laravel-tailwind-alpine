<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{

    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {

        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
