<?php

namespace App\Http\Actions\User;

use App\Models\User;

class UpdateUserAction
{
    public function __invoke($uuid, $data)
    {

        return User::findOrFail($uuid)->update($data);
    }
}
