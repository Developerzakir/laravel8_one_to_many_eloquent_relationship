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

    //post one data display process
    // $comments = Post::find(1);
    // return $comments;


    //post 1 and post one comment display process
    // $comments = Post::find(1)->comments;
    //  return $comments;
     
    //1 no comment data display process
    // $post = Comment::find(1);
    //  return $post;

    //1 no comment kon post e ase sei post display
    // $post = Comment::find(1)->post;
    //  return $post;
    
    //all post display
    // $post = Post::all();
    //  return $post;


     //post display with comments
    // $post = Post::with('comments')->get();
    //  return $post;


    //post and related comment display with blade file use
    //  $posts = Post::with('comments')->get();


  //comment display with parent post with blade file
    // $comments = Comment::all();
    



    return view('welcome', compact('comments'));
});
