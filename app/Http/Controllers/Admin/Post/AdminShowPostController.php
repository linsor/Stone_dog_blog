<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Post;




class AdminShowPostController extends Controller
{
    public function __invoke($id)
    {
        $post = Post::find($id);
        $games = Game::all();
        $tags = $post->tags;

        return view('post.admin.show', compact('post', 'games', 'tags'));

    }
}

