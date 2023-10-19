<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Main\BaseController;
use App\Models\Post;




class ShowPostController extends BaseController
{
    public function __invoke($id)
    {
        $post = Post::find($id);

        return view('post.show', compact('post'));

    }
}

