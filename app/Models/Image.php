<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ["movie_id", "image_path"];

    public function movies()
    {
        return $this->belongsTo(Movie::class);
    }
}
