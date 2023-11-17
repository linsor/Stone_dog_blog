<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminIndexUserController extends Controller
{
    public function __invoke() {

        $users = User::all();
        $roles = User::all()->pluck("role");

        return view("user.index", compact("users" , "roles"));
    }
}
