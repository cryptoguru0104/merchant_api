<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use Uuids;

    protected $fillable = [
        'imdb_id',
        'youtube_link',
        'poster_img',
        'bg_img',
        'title',
        'year',
        'rating',
        'length',
        'genre',
        'short_desc'
    ];
}
