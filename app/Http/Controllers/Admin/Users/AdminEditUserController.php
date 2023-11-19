<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminEditUserController extends Controller
{
    public function __invoke($id) {

        $user = User::find($id);

        
    }
}
