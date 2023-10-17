<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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


Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->name('create')->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::post('/newsletter', NewsletterController::class); //calling the invoke method

// Admin
Route::post('/admin/posts', [AdminPostController::class, 'store'])->middleware('admin'); //this middleware aliases are in Kernel.php
Route::get('/admin/posts/create', [AdminPostController::class, 'create'])->middleware('admin'); //this middleware aliases are in Kernel.php
Route::get('/admin/posts', [AdminPostController::class, 'index'])->middleware('admin'); //this middleware aliases are in Kernel.php
Route::get('/admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('admin'); //this middleware aliases are in Kernel.php
Route::patch('/admin/posts/{post}', [AdminPostController::class, 'update'])->middleware('admin'); //this middleware aliases are in Kernel.php
Route::delete('/admin/posts/{post}', [AdminPostController::class, 'destroy'])->middleware('admin'); //this middleware aliases are in Kernel.php

