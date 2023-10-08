<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\BaseController;
use App\Models\Accessories;
use App\Models\Processor;
use App\Models\User;
use App\Models\VideoCard;


class EditTestController extends BaseController
{
    public function __invoke($id) {
        $user = User::find($id);

        $processors = Processor::all();
        $videocards = VideoCard::all();

        return view('Test.edit', compact('user','processors', 'videocards'));
       
    }
}
 
