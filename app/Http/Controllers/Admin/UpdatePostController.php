<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Main\BaseController;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UpdatePostController extends BaseController
{
    public function __invoke(UpdateRequest $request, $id)
    {

        $post = Post::find($id);

        $data = [
            'date' => date('Y-m-d H:i:s'),
        ];

        $data += $request->validated();

        $data['PostImage'] = Storage::disk('public')->put('images/post', $data['PostImage']);

        $post->update($data);
        return redirect()->route('admin.post.index');

    }
}

