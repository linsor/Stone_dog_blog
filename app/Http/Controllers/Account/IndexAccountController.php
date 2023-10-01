<?php

namespace App\Http\Controllers\Account;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;

class IndexAccountController extends BaseController
{
    public function __invoke() {
        return view('account.index');
    }
}
