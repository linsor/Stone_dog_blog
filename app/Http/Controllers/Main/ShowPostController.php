<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Main\BaseController;
use App\Models\Post;




class ShowPostController extends BaseController
{
    public function __invoke($id) {
        $post = Post::find($id);

        return view('Main.show', compact('post'));
       
    }
}
 
