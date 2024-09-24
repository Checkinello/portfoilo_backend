<?php

namespace App\Http\Controllers\Review;

use App\Http\Actions\Review\ReadAllReviewsAction;
use App\Http\Controllers\Controller;

class ReadAllReviewsController extends Controller
{
    public function __invoke(
        ReadAllReviewsAction $readAllReviewsAction
    )
    {
        try {
            $Reviews = $readAllReviewsAction->__invoke();

            return response()->json([
                'message' => 'Reviews fetched successfully',
                'data' => $Reviews
            ]);
        }catch (\Exception $exception){

        }
    }
}
