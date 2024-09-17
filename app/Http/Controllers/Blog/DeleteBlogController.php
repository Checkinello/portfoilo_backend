<?php

namespace App\Http\Controllers\Blog;

use App\Http\Actions\Blog\DeleteBlogAction;
use App\Http\Actions\Blog\UpdateBlogAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteBlogController extends Controller

{
    public function __invoke(
        DeleteBlogAction $deleteBlogAction,
        Request $request,
    )
    {
        try {
            $deleteBlogAction->__invoke($request->id);

            return response()->json([
                'message' => 'Blog deleted successfully'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'error' => 'Failed to delete blog',
                'details' => $exception->getMessage()
            ], 400);
        }
    }
}
