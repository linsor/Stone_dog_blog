<?php

namespace App\Http\Controllers\Test;
use App\Http\Controllers\BaseController;
use App\Http\Requests\UpdateRequest;
use App\Models\Accessories;
use App\Models\User;

class UpdateTestController extends BaseController
{
    public function __invoke(UpdateRequest $request, $id) {

        $user = User::find($id);


        $accessories = Accessories::find($id);

        $data = $request->validated();

        $this->service->update($user, $data, $accessories);
        return  redirect()->route('test.index',);
       
    }
}
 
