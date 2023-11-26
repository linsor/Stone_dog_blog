<?php

namespace App\Http\Controllers\Main\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Requests\User\AccessoriesRequest;
use App\Models\Accessories;
use App\Models\User;

class UpdateUserController extends Controller
{
    public function __invoke(AccessoriesRequest $request, $id)
    {

        $accessories = Accessories::findOrFail($id);
        $data = $request->validated();


        $accessories->update($data);

        return redirect()->route('profile.show');

    }
}

