<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;


class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all() : Collection
    {
            //remember('key', ttl, a return function (that will be cached))
        return cache()->remember('posts.all',now()->addDay(), function(){
            return collect(File::files(resource_path('posts')))
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(fn($document) => new Post(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug
            ))
            ->sortByDesc('date') ;
        });

        // return collect(File::files(resource_path('posts')))
        //     ->map(fn($file) => YamlFrontMatter::parseFile($file))
        //     ->map(fn($document) => new Post(
        //         $document->title,
        //         $document->excerpt,
        //         $document->date,
        //         $document->body(),
        //         $document->slug
        //     ))
        //     ->sortByDesc('date');


    }

    public static function find($slug) : Post | Collection | null
    {
        return self::all()->firstWhere('slug' , $slug);
    }

    public static function findOrFail($slug)
    {
        $post = self::find($slug);

        if(!$post){
            throw new ModelNotFoundException();
        }else{
            return $post;
        }
    }
}
