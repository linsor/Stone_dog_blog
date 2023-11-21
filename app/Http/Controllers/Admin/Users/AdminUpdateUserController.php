<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Main\BaseController;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class AdminUpdateUserController extends BaseController
{
    public function __invoke(UpdateRequest $request, $id)
    {

        $user = User::findOrFail($id);
        $data = $request->validated();

        
        $user->update($data);

        return redirect()->route('admin.user.index');


    }
}

