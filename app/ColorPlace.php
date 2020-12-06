<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColorPlace extends Model
{
    protected $table = 'color_places';
    protected $fillable = [
        'place_id',
        'color_id',
    ];
}
