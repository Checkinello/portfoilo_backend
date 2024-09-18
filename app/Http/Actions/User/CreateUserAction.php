<?php

namespace App\Http\Actions\User;

use App\Models\User;

class CreateUserAction
{
    public function __invoke($data)
    {
        User::create($data);
    }
}
