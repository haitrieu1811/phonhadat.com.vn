<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    //
    function show()
    {
        $logged_id = Auth::id();
        $chats = User::where('id', '!=', $logged_id)
            ->get();

        return view('chat', compact('chats'));
    }
}
