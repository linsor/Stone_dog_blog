<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminIndexUserController extends Controller
{
    public function __invoke() {
        
        $users = User::all();
        $roles = Role::all();

        return view("user.admin.index", compact("users","roles"));
    }
}
