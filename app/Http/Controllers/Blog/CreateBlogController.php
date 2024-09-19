<?php

namespace App\Http\Controllers\Blog;

use App\Http\Actions\Blog\CreateBlogAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\CreateBlogRequest;

class CreateBlogController extends Controller
{
    public function __invoke(
        CreateBlogAction $createBlogAction,
        CreateBlogRequest $request
    )
    {
//        dd($request);
        try {
            $createBlogAction->__invoke($request->all());

                return response()->json([
                    'message' => 'Blog created successfully'
                ]);
        }catch (\Exception $exception){
            return response()->json([
                'error' => 'Failed to delete blog',
                'details' => $exception->getMessage()
            ], 500);
        }
    }
}
