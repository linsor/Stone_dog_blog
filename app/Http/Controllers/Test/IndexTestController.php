<?php

namespace App\Http\Controllers\Test;

use App\Models\Accessories;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;

class IndexTestController extends BaseController
{
    public function __invoke() {
        
        $users = User::all();

        return view('Test.index', compact('users'));
    }
}
