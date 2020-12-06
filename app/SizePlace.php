<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SizePlace extends Model
{
    protected $table = 'size_places';
    protected $fillable = [
        'place_id',
        'size_id',
    ];

}
