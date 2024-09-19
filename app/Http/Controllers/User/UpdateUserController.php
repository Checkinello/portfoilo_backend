<?php

namespace App\Http\Controllers\User;

use App\Http\Actions\User\UpdateUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserRequest;

class UpdateUserController extends Controller
{
    public function __invoke(
        UpdateUserAction $updateUserAction,
        UpdateUserRequest $request,
        $id
    )
    {
        try {
            $updateUserAction->__invoke($id, $request->all());

            return response()->json([
                'message' => 'User update successfully'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'error' => 'Failed to update User',
                'details' => $exception->getMessage()
            ], 400);
        }
    }
}
