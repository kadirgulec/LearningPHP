<?php

namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;


class Post 
{
    public $title;
    public $excerpt;
    public $date;
    public $body;

    public function __construct($title, $excerpt, $date, $body)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }

    public static function all()
    {
        
        $files = File::files(resource_path('posts/'));

        return array_map(fn($file) => $file->getContents() , $files);
        
        ///////////// same code without arrow function /////////////////////////
        // return array_map(function ($file){
        //     return $file->getContents();
        // }, $files);
    }

    public static function find($slug)
    {
        if (!file_exists($path = resource_path("/posts/{$slug}.html"))){
            throw new ModelNotFoundException();
        }

        return cache()->remember("posts.{$slug}", 5000 , fn() => file_get_contents($path));


        // $path = __DIR__ . "/../resources/posts/{$slug}.html";

        // if(! file_exists($path)){
        //     // abort(404);
        //     return redirect('/');
        // }

        // //mevcut sayfanin cachini aliyor
        // // posts.$slug burada key, yani herhangi birsey olabilir ve cach bu key üzerine yaziliyor.
        // $post = cache()->remember("posts.{$slug}", 5000 , function () use ($path){
        //     // var_dump('file.get.content');
        //     return file_get_contents($path);
        // });

        
        // return view ('post', [
        //     'post' => $post,
        // ]);

    }
}
