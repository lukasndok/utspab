<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
        //
    protected $fillable = ['name', 'slug'];

    public function tags()
    {
        return $this->belongsToMany(Tags::class);
    }
}
