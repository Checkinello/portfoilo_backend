<?php

namespace App\Http\Controllers\Blog;

use App\Http\Actions\Blog\CreateBlogAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateBlogController extends Controller
{
    public function __invoke(
        CreateBlogAction $createBlogAction,
        Request $request
    )
    {
        try {
            $createBlogAction->__invoke($request->all());

                return response()->json([
                    'message' => 'Blog created successfully'
                ]);
        }catch (\Exception $exception){

        }

    }
}
