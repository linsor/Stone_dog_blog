<?php

namespace App\Http\Controllers\admin\Post;


use App\Models\Game;
use App\Http\Controllers\Main\BaseController;
use App\Models\Post;

class AdminIndexPostController extends BaseController
{
    public function __invoke()
    {

        $posts = Post::all()->where("Author","=", auth()->user()->id);
        
        $games = Game::all();

        return view('post.admin.index', compact('posts', 'games'));

    }
}
