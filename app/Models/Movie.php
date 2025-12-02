<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    protected $fillable = ["title", "description", "release_year"];

    //N:N con Genre
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }


    //1:N con Image
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    //N:N con Actor 
    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }

    //N:N con Director
    public function directors()
    {
        return $this->belongsToMany(Director::class);
    }
}
