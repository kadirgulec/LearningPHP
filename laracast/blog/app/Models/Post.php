<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $guarded = ['id'];
    protected $fillable = ['title', 'excerpt', 'body', 'published_at'];

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters) //Post::newQuery->filter()
    {
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) =>
            $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
                ->orWhere('excerpt', 'like', '%' . $search . '%')
        );


        /* if (($filters['search']) ?? false) {
            $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%')
                ->orWhere('excerpt', 'like', '%' . request('search') . '%');
        } */


        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereHas('category' , fn($query) => $query->where('slug',$category)));

        /* $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query
                ->whereExists(fn($query)=>
                    $query->from('categories')
                    ->whereColumn('categories.id', 'posts.category_id')
                    ->where('categories.slug', $category)
                    )
        ); */




    }
    public function category()
    {
        // hasOne, hasMany, belongsTo, belongsToMany

        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
