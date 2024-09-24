<?php

namespace App\Http\Controllers\Review;

use App\Http\Actions\Review\DeleteReviewAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteReviewController extends Controller
{
    public function __invoke(
        DeleteReviewAction $deleteReviewAction,
        Request            $request,
                           $id
    )
    {
        try {
            $deleteReviewAction->__invoke($id, $request->all());

            return response()->json([
                'message' => 'Review deleted successfully'
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'error' => 'Failed to delete review',
                'details' => $exception->getMessage()
            ], 400);

        }
    }
}
