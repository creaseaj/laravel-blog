<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------U------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by thae RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts',[
        'posts' => Post::latest()->with('category','author')->get()
    ]);
});
Route::get('posts/{post}',   function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('category/{category:slug}',function(Category $category){
    return view('posts  ', [
        'posts' => $category->posts->load(['category','author'])
    ]);
});
Route::get('category', function() {
    return view('categories', [
        'categories' => Category::all()->load('posts')
    ]);
});
Route::get('author/{author:username}',function(User $author){
    return view('posts  ', [
        'posts' => $author->posts->load(['category','author'])
    ]);
});
Route::get('author', function() {
    return view('authors', [
        'authors' => User::all()->load('posts')
    ]);
});
