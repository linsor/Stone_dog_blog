<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Game;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Routing\Controller;


class AdminEditPostController extends Controller
{
    public function __invoke($id)
    {
        $post = Post::find($id);
        $games = Game::all();
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.admin.edit', compact('post', 'games', 'categories', 'tags'));

    }
}

