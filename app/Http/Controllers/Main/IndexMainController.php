<?php

namespace App\Http\Controllers\Main;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Main\BaseController;
use App\Models\Post;

class IndexMainController extends BaseController
{
    public function __invoke() {

        $posts = Post::all();

        return view('main.index', compact('posts'));
        
    }
}
