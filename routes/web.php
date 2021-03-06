<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Comment;

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

Route::get('/', function () {
//
//    $post = new Post();
//    $post->title = 'test title';
//    $post->content = 'test content';
//    $post->save();
//
//    Post::create([
//        'title' => 'test title 2',
//        'content' => 'test content 2',
//    ]);
//    $post = Post::all();
//    dd($post);
//    $post = Post::find(5);
//    dd($post);
//    $post = Post::where('id', '<', 11)->orderBy('id', 'DESC')->get();
//    dd($post);
//    $post = Post::find(4);
//    $post->update([
//        'title' => 'updated title',
//        'content' => 'updated content',
//    ]);
//    $post = Post::find(4);
//    $post->title = 'saved title';
//    $post->content = 'saved content';
//    $post->save();
//    $post = Post::find(2);
//    $post->delete();
//    Post::destroy(7);
//    Post::destroy(3, 5, 9);
//    $allPosts = Post::all();
//    dd($allPosts);
//    $savedPosts = Post::where('title', 'saved title')->get();
//    dd($savedPosts);
//    $fourthPost = Post::find(4);
//    dd($fourthPost);
//    $lastPost = Post::orderBy('id', 'DESC')->first();
//    dd($lastPost);
    $comment = new Comment();
    $comment->content = 'lll';
    $comment->post_id = '8';
    $comment->save();
});
Route::get("index",[\App\Http\Controllers\PostsController::class,'index'])->name("posts.index");
Route::get("post",[\App\Http\Controllers\PostsController::class,'show'])->name("posts.show");
Route::get("about",[\App\Http\Controllers\PostsController::class,'about'])->name("posts.about");
Route::get("contact",[\App\Http\Controllers\PostsController::class,'contact'])->name("posts.contact");
