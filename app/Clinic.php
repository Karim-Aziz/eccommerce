<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $table = 'clinics';
    protected $fillable = [
        'title',
        'address',
        'time',
        'title_ar',
        'address_ar',
        'time_ar',
        'phone',
    ];


    public static function rules($request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'time' => 'required|string|max:255',
            'address_ar' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'time_ar' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ];
        return $rules;
    }

    public static function credentials($request)
    {
        $credentials = [
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'address' => $request->address,
            'address_ar' => $request->address_ar,
            'time' => $request->time,
            'time_ar' => $request->time_ar,
            'phone' => $request->phone,
        ];

        return $credentials;
    }
}
