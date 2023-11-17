<?php

namespace App\Http\Controllers\Admin\Post;


use App\Http\Controllers\Main\BaseController;
use App\Models\Post;


class DeletePostController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post->tags()->detach();
        
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}

