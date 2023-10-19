<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Main\BaseController;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class StorePostController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = [
            'date' => date('Y-m-d H:i:s'),
            'Author' => Auth::user()->id,
        ];


        $data += $request->validated();
        Post::create($data);
        return redirect()->route('post.index', );

    }
}

