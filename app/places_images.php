<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class places_images extends Model
{
    //
    protected $table = 'places_images';
    protected $fillable = ['place_id', 'image_id'];
}
