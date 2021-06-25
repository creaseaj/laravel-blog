<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}',  [PostController::class,'show']);

Route::get('category/{category:slug}',[PostController::class,'index'])->name('category');

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
Route::get('/register', [RegisterController::class, 'create']);
