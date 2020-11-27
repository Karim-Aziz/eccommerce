<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    //
    protected $table = 'services';
    protected $fillable = ['name', 'name_ar',  'desc', 'desc_ar', 'image_id'];

    public function image()
    {
        return $this->hasOne('App\Image', 'id', 'image_id');
    }

    public static function rules($request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',


            'desc' => 'required|string',
            'desc_ar' => 'required|string',

        ];
        return $rules;
    }

    public static function credentials($request)
    {

        $credentials = [
            'name' => $request->name,
            'name_ar' => $request->name_ar,

            
            'desc_ar' => $request->desc_ar,
            'desc' => $request->desc,
        ];
        if ($request->file('image_id') != null) {
            $credentials['image_id'] = self::file($request->file('image_id'));
        }
        return $credentials;
    }

    public static function file($file)
    {

        $extension = $file->getClientOriginalExtension();
        $fileName = time() . rand(11111, 99999) . '.' . $extension;
        $destinationPath = public_path() . '/img/services/';
        $file->move($destinationPath, $fileName);
        $Image = Image::create(['name' => $fileName]);
        return $Image->id;
    }

}
