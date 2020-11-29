<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    //
    protected $table = 'brands';
    protected $fillable = ['image_id'];

    public static function rules($request)
    {
        $rules = [
            'img' => 'required',
        ];
        return $rules;
    }

    public static function credentials($request)
    {
        $credentials = [];
        if ($request->file('img') != null) {
            $credentials['image_id'] = self::file($request->file('img'));
        }
        return $credentials;
    }
    public static function file($file)
    {

        $extension = $file->getClientOriginalExtension();
        $fileName = time() . rand(11111, 99999) . '.' . $extension;
        $destinationPath = public_path() . '/img/brand/';
        $file->move($destinationPath, $fileName);
        $Image = Image::create(['name' => $fileName]);
        return $Image->id;
    }

    public function image()
    {
        return $this->hasOne('App\Image', 'id', 'image_id');
    }
}
