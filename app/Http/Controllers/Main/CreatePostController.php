<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Main\BaseController;
use App\Models\Game;



class CreatePostController extends BaseController
{
    public function __invoke()
    {
        $games = Game::all();

        return view('post.create', compact('games'));

    }
}

