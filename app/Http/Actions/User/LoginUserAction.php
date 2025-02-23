<?php

namespace App\Http\Actions\User;

use App\Models\User;
use http\Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginUserAction
// BearerToken aanmaken als email en wachtwoord overeen komen met email en wachtwoord in de users tabel
{
    public function __invoke($request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
        $token = $user->createToken($user->name .  Carbon::now())->plainTextToken;
        } else {
            $error = ValidationException::withMessages([
                'input' => ['The provided credentials are incorrect.'],
            ]);
             throw $error;
        }
        return $token;
    }
}
