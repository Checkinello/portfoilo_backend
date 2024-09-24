<?php

namespace App\Http\Actions\Review;

use App\Models\Review;

class CreateReviewAction
{
    public function __invoke($data)
    {
        Review::create($data);
    }
}
