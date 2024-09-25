<?php

namespace App\Http\Actions\User;

use App\Models\User;
use http\Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginUserAction
{
    public function __invoke($request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
        $token = $user->createToken($user->name . Carbon::now())->plainTextToken;
        } else {
            $error = ValidationException::withMessages([
                'input' => ['The provided credentials are incorrect.'],
            ]);
             throw $error;
        }
        return $token;
    }
}
