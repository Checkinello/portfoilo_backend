<?php

namespace App\Http\Actions\User;

use App\Models\User;

class ReadAllUsersAction
{
    public function __invoke()
    {
        return User::all();
    }
}
