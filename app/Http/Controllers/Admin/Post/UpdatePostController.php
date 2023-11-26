<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UpdatePostController extends Controller
{
    public function __invoke(UpdateRequest $request, $id)
    {

        $post = Post::findOrFail($id);

        $data = [
            'date' => date('Y-m-d H:i:s'),
        ];

        $data += $request->validated();

        $tags = $data['tags'];
        unset($data['tags']);

        if ($request->hasFile('PostImage')) {

            $data['PostImage'] = Storage::disk('public')->put('images/post', $data['PostImage']);
        }



        $post->update($data);
        $post->tags()->sync($tags);

        return redirect()->route('admin.post.index');

    }
}

