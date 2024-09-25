<?php

namespace App\Http\Controllers\User;

use App\Http\Actions\User\LoginUserAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    public function __invoke(
        Request         $request,
        LoginUserAction $loginUserAction
    )
    {
        try {
            $token = $loginUserAction->__invoke($request);
            return response()->json([
                'message' => 'Login success',
                'BearerToken' => $token
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'error' => 'Failed to login',
                'details' => $exception->getMessage()
            ], 400);
        }
    }
}
