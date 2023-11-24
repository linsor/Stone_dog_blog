<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Test\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Accessories;
use App\Models\User;



class ShowTestController extends BaseController
{
    public function __invoke($id) {
        $user = User::find($id);
        $accessories = Accessories::where('user_id', '=', $id)->first();



        return view('Test.show', compact('user','accessories'));
       
    }
}
 
