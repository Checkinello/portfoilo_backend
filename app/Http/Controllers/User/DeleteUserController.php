<?php

namespace App\Http\Controllers\User;

use App\Http\Actions\User\DeleteUserAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteUserController extends Controller
{
    public function __invoke(
        DeleteUserAction $deleteUserAction,
        Request $request,
        $uuid
    )
    {
        try {
            $deleteUserAction->__invoke($uuid);

            return response()->json([
                'message' => 'User deleted successfully'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'error' => 'Failed to delete user',
                'details' => $exception->getMessage()
            ], 400);
        }
    }
}
