<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model
{

    // protected $table = "post_new";

    protected $fillable = ["title", "author", "slug", "body"];
}
