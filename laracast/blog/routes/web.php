<?php

use App\Http\Controllers\HomeController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::view('/', 'posts', ['posts' => Post::with('category')->get()]); //long type of this code is under this code

Route::get('/', function () {

    return view('posts', [
        'posts' => Post::latest()
    ]);

});

Route::get('posts/{post:slug}', function (Post $post) { //Post::where('slug',$post)->firstOrFail();


    return view('post', [
        'post' => $post
    ]);


});
 Route::get('categories/{category:slug}', function (Category $category){

    return view('posts', [
        'posts' => $category->posts
    ]);

 });

 Route::get('authors/{author:username}', function (User $author){
    return view ('posts' , [
        'posts' => $author->posts
    ]);
 });

Route::get('/test', [HomeController::class, 'test']);
