<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider_images extends Model
{
    //
    protected $table = 'slider_images';
    protected $fillable = ['slider_id', 'image_id'];
}
