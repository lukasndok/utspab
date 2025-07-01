<?php

namespace App\Http\Controllers;

use view;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

class PostController extends Controller
{
    public function detail ($slug){
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post.detail', ['post' => $post]);


    }
    //
}
