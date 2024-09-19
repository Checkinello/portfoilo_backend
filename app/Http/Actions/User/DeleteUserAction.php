<?php

namespace App\Http\Actions\User;

use App\Models\User;

class DeleteUserAction
{
    public function __invoke($uuid)
    {

        $user = User::where('id', $uuid)->firstOrFail();
        $user->delete();
    }
}
