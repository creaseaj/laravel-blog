<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('posts', [PostController::class, 'apiIndex']);
Route::get('posts/{post:slug}', [PostController::class, 'apiShow']);
Route::get('categories', function () {
    return Category::all();
});
Route::get('categories/{category:slug}', function (Category $category) {
    return Post::with('category','author')
    ->where('category_id',$category->id)
     ->get();
});
