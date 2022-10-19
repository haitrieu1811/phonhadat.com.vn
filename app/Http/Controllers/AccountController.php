<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    //
    function profile()
    {
        $account = Auth::user();

        return view('account.profile', compact('account'));
    }
}
