<?php

namespace App\Http\Controllers\User;

use App\Http\Actions\User\ReadAllUsersAction;
use App\Http\Controllers\Controller;

class ReadAllUsersController extends Controller
{
    public function __invoke(
        ReadAllUsersAction $readAllUsersAction
    )
        //Data dat opgehaald moet worden doorgeven aan de action

    {
        try {
            $users = $readAllUsersAction->__invoke();

            return response()->json([
                'message' => 'User fetched successfully',
                'data' => $users
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'error' => 'Failed to Fetch  User',
                'details' => $exception->getMessage()
            ], 400);
        }
    }
}
