<?php

namespace App\Http\Controllers\Review;

use App\Http\Actions\Review\UpdateReviewAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Review\UpdateReviewRequest;

class UpdateReviewController extends Controller
{
    public function __invoke(
        UpdateReviewAction $updateReviewAction,
        UpdateReviewRequest $request,
                         $id
    )
    {
        try {
            $updateReviewAction->__invoke($id, $request->all());

            return response()->json([
                'message' => 'Review updated successfully'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'error' => 'Failed to update Review',
                'details' => $exception->getMessage()
            ], 400);
        }
    }
}
