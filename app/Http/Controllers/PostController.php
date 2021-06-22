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
            'posts' => Post::latest()->with('category','author')->filter(request(['search','category']))->get(),
            'currentCategory' => Category::where('slug', request('category'))->first(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            'post' => $post
        ]);
    }
}
