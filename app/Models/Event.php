<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use Uuids;

    protected $fillable = [
        'title',
        'description',
        'start_datetime',
        'end_datetime'
    ];
}
