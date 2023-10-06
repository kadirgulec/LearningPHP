<?php

use App\Http\Controllers\HomeController;
use App\Models\Post;
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

Route::view('/', 'posts', ['posts' => Post::all()]); //long type of this code is under this code

// Route::get('/', function () {

//     return view('posts', [
//         'posts' => Post::all()
//     ]);

// });

Route::get('posts/{post:slug}', function (Post $post) { //Post::where('slug',$post)->firstOrFail();


    return view('post', [
        'post' => $post
    ]);


});

Route::get('/test', [HomeController::class, 'test']);
