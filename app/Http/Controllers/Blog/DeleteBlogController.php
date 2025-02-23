<?php

namespace App\Http\Controllers\Blog;

use App\Http\Actions\Blog\DeleteBlogAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteBlogController extends Controller

{
    public function __invoke(
        DeleteBlogAction $deleteBlogAction,
        Request $request,
    )
        //Data dat verwijderd moet worden geven aan de action
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
