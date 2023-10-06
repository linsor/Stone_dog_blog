<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\Accessories;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;
use PhpParser\Node\Stmt\Return_;

class ShowTestController extends Controller
{
    public function __invoke($id) {
        $user = User::find($id);
        $accessories = Accessories::find($id);

        return view('Test.show', compact('user','accessories'));
       
    }
}
 
