<?php

namespace App\Http\Controllers\Test;

use App\Models\Accessories;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;

class CreateTestController extends BaseController
{
    public function __invoke() {
        

        $accessory = Accessories::all();

        return view('Test.create', compact('accessory'));
    }
}
