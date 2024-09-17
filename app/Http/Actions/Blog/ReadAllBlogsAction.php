<?php

namespace App\Http\Actions\Blog;

use App\Models\Blog;

class ReadAllBlogsAction
{
    public function __invoke()
    {
        return Blog::all();
    }
}
