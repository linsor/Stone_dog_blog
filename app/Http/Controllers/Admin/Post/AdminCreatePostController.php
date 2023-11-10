<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Game;
use Illuminate\Support\Facades\Auth;



class AdminCreatePostController extends Controller
{
    public function __invoke()
    {
        
        $games = Game::all();
        $categories = Category::all();

        return view('post.admin.create', compact('games', 'categories'));

    }
}

