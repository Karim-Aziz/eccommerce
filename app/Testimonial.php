<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    //
    protected $table = 'testimonials';
    protected $fillable = [
        'name',
        'name_ar',
        'desc',
        'desc_ar',
    ];

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
            'name'                  => $request->name,
            'name_ar'               => $request->name_ar,
            'desc_ar'               => $request->desc_ar,
            'desc'                  => $request->desc,
        ];
        return $credentials;
    }

}
