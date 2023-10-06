<?php

namespace App\Http\Controllers\Test;

use App\Models\Accessories;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;
use PhpParser\Node\Stmt\Return_;

class ShowTestController extends BaseController
{
    public function __invoke(User $user) {
        
        return view('/test/show', compact('user'));
       
    }
}
 
