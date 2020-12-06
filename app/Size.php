<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';
    protected $fillable = [
        'name',
        'name_ar',
    ];

    public static function rules($request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
        ];
        return $rules;
    }


    public static function credentials($request)
    {
        $credentials = [
            'name' => $request->name,
            'name_ar' => $request->name_ar,
        ];
        return $credentials;
    }
}
