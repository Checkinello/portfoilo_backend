<?php

namespace App\Http\Actions\Blog;

use App\Models\Blog;

class CreateBlogAction
{
    public function __invoke($data)
    {
        Blog::create($data);
    }
}
