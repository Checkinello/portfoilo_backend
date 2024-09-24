<?php

namespace App\Http\Actions\Review;

use App\Models\Review;

class DeleteReviewAction
{
    public function __invoke($id, $data)
    {

        return Review::findOrFail($id)->delete();
    }
}
