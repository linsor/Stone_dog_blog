<?php

namespace App\Http\Controllers\Main;


use App\Models\Game;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Main\BaseController;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;

class IndexPostController extends BaseController
{
    public function __invoke()
    {

        $posts = Post::all();
        $games = Game::all();

        return view('post.index', compact('posts', 'games'));

    }
}
