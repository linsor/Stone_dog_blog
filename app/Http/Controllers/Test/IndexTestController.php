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
        
        $id = 2;
        $users = User::find($id);
        $accessories = $users->accessories;
        $accessory = Accessories::find($id);

        return view('Test.index', compact('users'), compact('accessory'));
    }
}
