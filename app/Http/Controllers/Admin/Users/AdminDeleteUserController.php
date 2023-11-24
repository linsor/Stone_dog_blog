<?php

namespace App\Http\Controllers\Admin\Users;


use App\Http\Controllers\Main\BaseController;
use App\Models\User;

class AdminDeleteUserController extends BaseController
{
    public function __invoke(User $user)
    {

        $user->delete();
        return redirect()->back();
    }
}

