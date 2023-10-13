<?php

use App\Http\Controllers\HomeController;
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

//Route::view('/', 'posts', ['posts' => Post::with('category')->get()]); //long type of this code is under this code

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->name('create')->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::post('/newsletter', function () {

    request()->validate(['email'=>'required|email']);
    // require_once('/path/to/MailchimpMarketing/vendor/autoload.php');

    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us11'
    ]);

    try
    {
        $response = $mailchimp->lists->addListMember('b69e8dd745', [
            "email_address" => request('email'),
            "status" => "subscribed",]);
    }catch(\Exception $e){
        throw \Illuminate\Validation\ValidationException::withMessages([
            'email' => 'This email could not be added to our newsletter list',
        ]);
    }


    return redirect('/')->with('success', 'You are now subscribed for our newsletter!');
});

Route::get('/test', [HomeController::class, 'test']);
