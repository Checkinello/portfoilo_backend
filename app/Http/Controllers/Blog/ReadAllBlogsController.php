<?php

namespace App\Http\Controllers\Blog;

use App\Http\Actions\Blog\ReadAllBlogsAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReadAllBlogsController extends Controller
{
    public function __invoke(
        ReadAllBlogsAction $readAllBlogsAction
    )
        //Data dat opgehaald moet worden doorgeven aan de action
    {
        try {
            $blogs = $readAllBlogsAction->__invoke();

            return response()->json([
                'message' => 'Blog fetched successfully',
                'data' => $blogs
            ]);
        }catch (\Exception $exception){

        }
    }
}
