<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function home()
    {
        // Large post
        $large_post_id = Post::max('id');
        $large_post = Post::find($large_post_id);

        // Posts
        $posts_1 = Post::limit(4, 1)
            ->orderBy('id', 'DESC')
            ->get();

        return view('home', compact('large_post', 'posts_1'));
    }
}
