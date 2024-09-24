<?php

namespace App\Http\Controllers\Review;

use App\Http\Actions\Review\CreateReviewAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Review\CreateReviewRequest;

class CreateReviewController extends Controller
{
    public function __invoke(
        CreateReviewAction $createReviewAction,
        CreateReviewRequest $request
    )
    {
        try {
            $createReviewAction->__invoke($request->all());

            return response()->json([
                'message' => 'Review created successfully'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'error' => 'Failed to create review',
                'details' => $exception->getMessage()
            ], 500);
        }
    }
}
