<?php

use App\Http\Controllers\Blog\CreateBlogController;
use App\Http\Controllers\Blog\DeleteBlogController;
use App\Http\Controllers\Blog\ReadAllBlogsController;
use App\Http\Controllers\Blog\UpdateBlogController;
use App\Http\Controllers\ContactForm\CreateContactFormController;
use App\Http\Controllers\Review\CreateReviewController;
use App\Http\Controllers\Review\DeleteReviewController;
use App\Http\Controllers\Review\ReadAllReviewsController;
use App\Http\Controllers\Review\UpdateReviewController;
use App\Http\Controllers\User\CreateUserController;
use App\Http\Controllers\User\DeleteUserController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\ReadAllUsersController;
use App\Http\Controllers\User\UpdateUserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['middleware' => 'auth:sanctum'], function () {
    route::post('/blog',CreateBlogController::class);
    route::put('blog/{id}', UpdateBlogController::class);
    route::delete('blog/{id}', DeleteBlogController::class);

    route::put('/user/{uuid}',UpdateUserController::class);
    route::delete('/user/{uuid}',DeleteUserController::class);
    route::get('/users',ReadAllUsersController::class);
});
route::get('/blogs',ReadAllBlogsController::class);

route::post('/user',CreateUserController::class);
route::post('/login',LoginUserController::class);

route::post('/contactForm',CreateContactFormController::class);

route::post('/review',CreateReviewController::class);
route::get('/review',ReadAllReviewsController::class);
route::put('review/{id}', UpdateReviewController::class);
route::delete('review/{id}', DeleteReviewController::class);

