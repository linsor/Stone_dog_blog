<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;

class IndexMainController extends BaseController
{
    public function __invoke() {

        $users = User::all();

        return view('main.index', compact('users'));
    }
}
