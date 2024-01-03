<?php

namespace App\Http\Controllers\Admin\Post;


use App\Models\Game;
use App\Http\Controllers\Controller;
use App\Models\Post;

class AdminIndexPostController extends Controller
{
    public function __invoke()
    {

        $posts = Post::all()->where("Author", "=", auth()->user()->id);
        $games = Game::all();


        foreach ($posts as $post) {
            $post->Content = strip_tags($post->Content);
        }

        return view('post.admin.index', compact('posts', 'games'));

    }
}
