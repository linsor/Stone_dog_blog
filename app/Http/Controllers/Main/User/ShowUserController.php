<?php

namespace App\Http\Controllers\Main\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Accessories;
use App\Models\Processor;
use App\Models\VideoCard;

class ShowUserController extends Controller
{
    public function __invoke()
    {

        if (!auth()->check()) {
            return redirect()->route('home');
        }


        $user = User::find(auth()->user()->id);
        $processors = Processor::all();
        $videoCards = VideoCard::all();

        $accessories = Accessories::where('user_id', '=', $user->id)->first();



        return view('user.show', compact('user', 'processors', 'videoCards', 'accessories'));

    }
}
