<?php

namespace App\Http\Actions\User;

use App\Models\User;
use http\Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginUserAction
{
    public function __invoke($request)
    {
        $token = '';
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken('Portfolio')->plainTextToken;
        } else {

            $error = ValidationException::withMessages([
                'input' => ['The provided credentials are incorrect.'],
            ]);
             throw $error;
        }
        return $token;
    }
}
