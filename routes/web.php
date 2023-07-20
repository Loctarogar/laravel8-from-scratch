<?php

use App\Http\Controllers\PostsController;
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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostsController::class, 'index'])->name('home');
Route::get('/posts/{post}', [PostsController::class, 'show'])->name('show');

//Route::get('/categories/{category:slug}', function (Category $category) {
//    return view('posts', [
//        'posts' => $category->posts->load(['category', 'author']),
//        'currentCategory' => $category,
//        'categories' => Category::all(),
//    ]);
//});

Route::get('authors/{author:username}', function (User $author) {
    $author->load('posts.author');

    return view('posts', [
        'posts' => $author->posts->load(['category', 'author']),
        'go_back_button' => true
    ]);
});
