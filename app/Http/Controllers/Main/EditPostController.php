<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Main\BaseController;
use App\Models\Game;
use App\Models\Post;


class EditPostController extends BaseController
{
    public function __invoke($id) {
        $post = Post::find($id);
        $games = Game::all();

        return view('Main.edit', compact('post','games'));
       
    }
}
 
