<?php

namespace App\Http\Actions\Blog;

use App\Models\Blog;

class UpdateBlogAction
{
    public function __invoke($id, $data)
    {

        return Blog::findOrFail($id)->update($data);
    }
}
