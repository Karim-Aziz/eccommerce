<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class home_desc extends Model
{
    //
    protected $table = 'home_desc';
    protected $fillable = ['desc_ar', 'desc', 'image'];

    public static function rules($request)
    {
        $rules = [
            'desc' => 'required',
            'desc_ar' => 'required',
            
        ];
        return $rules;
    }

    public static function credentials($request)
    {
        $credentials = [
            'desc_ar' => $request->desc_ar,
            'desc' => $request->desc,
        ];
        if ($request->file('image') != null) {
            $credentials['image'] = self::file($request->file('image'));

        }
        return $credentials;
    } 
    public static function file($file)
    {
        
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . rand(11111, 99999) . '.' . $extension;
        $destinationPath = public_path() . '/img/home_desc/';
        $file->move($destinationPath, $fileName);
        return $fileName;
    }
}
