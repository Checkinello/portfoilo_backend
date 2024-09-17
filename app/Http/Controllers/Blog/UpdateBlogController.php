<?php

namespace App\Http\Controllers\Blog;

use App\Http\Actions\Blog\UpdateBlogAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateBlogController extends Controller
{
    public function __invoke(
        UpdateBlogAction $updateBlogAction,
        Request $request,
        $id
    )
    {
        try {
            $updateBlogAction->__invoke($id, $request->all());

            return response()->json([
                'message' => 'Blog update successfully'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'error' => 'Failed to update blog',
                'details' => $exception->getMessage()
            ], 500);
        }
    }
}
