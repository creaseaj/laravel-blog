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
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by thae RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::latest();
    if (request('search')) {
        $posts->where('title', 'like', '%' . request('search') . '%')->
        orWhere('body', 'like','%' . request('search') . '%');
    }
    return view('posts',[
        'posts' => $posts->with('category','author')->get(),
        'currentCategory' => null,
        'categories' => Category::all()
    ]);
})->name('home');
Route::get('posts/{post}',   function (Post $post) {
    return view('post', [
        'post' => $post,
        'currentCategory' => null,
        'categories' => Category::all()
    ]);
});

Route::get('category/{category:slug}',function(Category $category){
    return view('posts  ', [
        'posts' => $category->posts->load(['category','author']),
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
})->name('category');

Route::get('category', function() {
    return view('categories', [
        'categories' => Category::all()->load('posts'),
        'categories' => Category::all()

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
