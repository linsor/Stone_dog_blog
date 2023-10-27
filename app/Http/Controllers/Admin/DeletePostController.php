<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Main\BaseController;
use App\Models\Post;


class DeletePostController extends BaseController
{
    public function __invoke(Post $post)
    {

        $post->delete();
        return redirect()->route('admin.post.index');
    }
}

