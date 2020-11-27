<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about_as extends Model
{
    //
    protected $table = 'about_as';
    protected $fillable = [
        'about_company', 'about_company_ar', 'image_id'
    ];

    public static function rules($request)
    {
        $rules = [
            'about_company' => 'required',
            'about_company_ar' => 'required',
            'img' => 'required',
        ];
        return $rules;
    }

    public static function credentials($request)
    {
        $credentials = [
            'about_company' => $request->about_company,
            'about_company_ar' => $request->about_company_ar,
        ];
        if ($request->file('img') != null) {
            $credentials['image_id'] = self::file($request->file('img'));
        }
        return $credentials;
    }
    public static function file($file)
    {

        $extension = $file->getClientOriginalExtension();
        $fileName = time() . rand(11111, 99999) . '.' . $extension;
        $destinationPath = public_path() . '/img/about_as/';
        $file->move($destinationPath, $fileName);
        $Image = Image::create(['name' => $fileName]);
        return $Image->id;
    }

    public function image()
    {
        return $this->hasOne('App\Image', 'id', 'image_id');
    }
}
