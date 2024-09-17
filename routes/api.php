<?php

use App\Http\Controllers\Blog\CreateBlogController;
use App\Http\Controllers\Blog\DeleteBlogController;
use App\Http\Controllers\Blog\ReadAllBlogsController;
use App\Http\Controllers\Blog\UpdateBlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

route::post('/blog',CreateBlogController::class);
route::get('/blogs',ReadAllBlogsController::class);
route::put('blog/{id}', UpdateBlogController::class);
route::delete('blog/{id}', DeleteBlogController::class);

