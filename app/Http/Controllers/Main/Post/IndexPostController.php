<?php

namespace App\Http\Controllers\Main\Post;


use App\Models\Game;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use App\Models\Post;


class IndexPostController extends Controller
{
    public function __invoke()
    {

        $posts = Post::all();
        $games = Game::all();

        return view('post.index', compact('posts', 'games'));

    }
}
