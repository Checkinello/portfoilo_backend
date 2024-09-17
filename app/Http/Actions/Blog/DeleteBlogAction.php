<?php

namespace App\Http\Actions\Blog;

use App\Models\Blog;

class DeleteBlogAction
{
    public function __invoke($id)
    {
        $blog = Blog::findOrFail($id)->delete;
    }
}
