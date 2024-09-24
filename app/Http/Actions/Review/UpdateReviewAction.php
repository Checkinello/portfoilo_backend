<?php

namespace App\Http\Actions\Review;

use App\Models\Review;

class UpdateReviewAction
{
    public function __invoke($id, $data)
    {

        return Review::findOrFail($id)->update($data);
    }
}
