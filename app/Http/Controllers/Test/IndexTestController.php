<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\BaseController;
use App\Models\User;

class IndexTestController extends BaseController
{
    public function __invoke() {
        
        $users = User::all();

        return view('Test.index', compact('users'));
    }
}
