<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Http\Controllers\ArtikelController;

class ArtikelController extends Controller
{
    public function index()
    {
        $featured_post = Post::first();
        $post_list = Post::where('published', true)->get();
        return view('artikel.index', compact('featured_post','post_list'));
    //
    }

}
