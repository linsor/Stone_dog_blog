<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Main\BaseController;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StorePostController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $dataTime = date('Y-m-d H:i:s');

        $data = [
            'date' => $dataTime,
            'Author' => Auth::user()->id,
        ];


        $data += $request->validated();

        $tags = $data['tags'];
        unset($data['tags']);

        if ($request->hasFile('PostImage')) {

            $data['PostImage'] = Storage::disk('public')->put('images/post', $data['PostImage']);
        }


        $post = Post::Create($data);
        $post->tags()->attach($tags);

        return redirect()->route('admin.post.index');

    }
}

