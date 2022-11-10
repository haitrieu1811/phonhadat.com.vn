<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function show()
    {
    }

    function detail($slug, $id)
    {
        $post = Post::find($id);
        $user = Post::find($id)->user;

        $new_posts = Post::where('id', '!=', $id)
            ->orderBy('id', 'DESC')
            ->limit(5, 0)
            ->get();

        return view('post.detail', compact('post', 'user', 'new_posts'));
    }
}
