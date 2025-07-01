<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Penulis;
use App\Http\Controllers\PenulisCotroller;

class PenulisCotroller extends Controller
{
    public function index()
    {
        $featured_post = Post::first();
        $post_list = Post::where('published', false)->get();
        return view('penulis.index', compact('featured_post','post_list'));
    //
    }
}

