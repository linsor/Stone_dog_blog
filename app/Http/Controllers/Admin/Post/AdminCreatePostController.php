<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Game;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;



class AdminCreatePostController extends Controller
{
    public function __invoke()
    {
        
        $games = Game::all();
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.admin.create', compact('games', 'categories', 'tags'));

    }
}

