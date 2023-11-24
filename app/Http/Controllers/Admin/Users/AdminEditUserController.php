<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
Use APP\Models\Role;
use Illuminate\Http\Request;

class AdminEditUserController extends Controller
{
    public function __invoke($id) {

        $user = User::find($id);
        $roles = Role::all();

        return view("user.edit", compact("user","roles"));
    }
}
