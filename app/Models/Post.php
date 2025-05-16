<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'slug', 'categories', 'tags', 'excerpt', 'content', 
                            'published', 'published_at', 'user_id'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tags::class);
    }
}
