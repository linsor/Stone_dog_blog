<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Accessories;
use App\Models\Post;
use App\Models\User;



class ShowMainController extends BaseController
{
    public function __invoke($id) {
        $post = Post::find($id);

        return view('Main.show', compact('post'));
       
    }
}
 
