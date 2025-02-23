<?php

namespace App\Http\Controllers\Blog;

use App\Http\Actions\Blog\CreateBlogAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\CreateBlogRequest;
use Illuminate\Support\Facades\Auth;

class CreateBlogController extends Controller
{
    public function __invoke(
        CreateBlogAction $createBlogAction,
        CreateBlogRequest $request
    )
//Data dat in database moet mee geven naar de action
    {
        try {
            $request['user_id'] = Auth::user()->id;

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
