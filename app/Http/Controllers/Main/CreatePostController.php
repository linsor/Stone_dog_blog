<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Main\BaseController;
use App\Models\Game;
use Illuminate\Support\Facades\Auth;



class CreatePostController extends BaseController
{
    public function __invoke()
    {

        if(Auth::user() == null)
        {
            return  redirect()->back()->with("error","НУ ВАМ СЮДА НЕЛЬЗЯ");

        }
        
        $games = Game::all();

        return view('post.create', compact('games'));

    }
}

