<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable = ['name'];

    public static function custom_uri()
    {
        $path = explode('/', url('/'));

        if ($path[count($path) - 1] == 'public') {
            unset($path[count($path) - 1]);
            $root = implode('/', $path);
        } else {
            $root = implode('/', $path);
        }
        return $root . '/storage/app/public/';
    }
    public static function base_uri()
    {
        $str = strpos(base_path(), '/');
        if ($str !== false) {
            $path = explode("/", base_path());
        }else{
            $path = explode("\\", base_path());
        }
        if ($path[count($path) - 1] == 'local') {
            unset($path[count($path) - 1]);
            $root = implode('/', $path);
        } else {
            $root = implode('/', $path);
        }
        return $root . '/storage/app/public/';
    }
}
