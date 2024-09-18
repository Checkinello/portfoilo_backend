<?php

namespace App\Http\Controllers\User;

use App\Http\Actions\User\CreateUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;

class CreateUserController extends Controller
{
    public function __invoke(
        CreateUserAction $createUserAction,
        CreateUserRequest $request
    )
    {
        try {
            $createUserAction->__invoke($request->all());

            return response()->json([
                'message' => 'User created successfully'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'error' => 'Failed to Create User',
                'details' => $exception->getMessage()
            ], 400);
        }
    }
}
