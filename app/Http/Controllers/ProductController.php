<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function show()
    {
        return view('product.show');
    }

    function detail($slug, $id)
    {
        return view('product.detail', compact('id'));
    }
}
