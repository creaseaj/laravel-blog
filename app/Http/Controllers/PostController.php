<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index() {

        return view('posts',[
            'posts' => Post::latest()->with('category','author')->filter(request(['search','category']))->paginate()
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            'post' => $post
        ]);
    }
}