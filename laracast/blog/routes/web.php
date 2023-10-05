<?php

use App\Http\Controllers\HomeController;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;


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

Route::get('/', function (){

    $files = File::files(resource_path('posts'));

    $posts = [];

    foreach ($files as $file){
        $document = YamlFrontMatter::parseFile($file);

        $posts[] = new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body()
        );
    }



    return view('posts', [
        'posts' => $posts
    ]);



    // return view ('posts' , [
    //     'posts' => Post::all()
    // ]);
});

Route::get('posts/{post}', function($slug){


    return view('post', [
        'post' => Post::find($slug)
    ]);


})->where('post', '[A-z_/-]+');

Route::get('/test', [HomeController::class, 'test']);
