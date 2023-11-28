<?php

namespace App\Http\Controllers\Main\Post;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Post;




class ShowPostController extends Controller
{
    public function __invoke($id)
    {
        $post = Post::find($id);
        $games = Game::all();
        $tags = $post->tags;
        
        return view('post.show', compact('post', 'games', 'tags'));

    }
}

