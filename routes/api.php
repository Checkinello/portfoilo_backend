<?php

use App\Http\Controllers\Blog\CreateBlogController;
use App\Http\Controllers\Blog\ReadAllBlogsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

route::post('/blog',CreateBlogController::class);
route::get('/blogs',ReadAllBlogsController::class);
