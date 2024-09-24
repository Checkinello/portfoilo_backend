<?php

namespace App\Http\Actions\Review;

use App\Models\Review;

class ReadAllReviewsAction
{
    public function __invoke()
    {
        return Review::all();
    }
}
