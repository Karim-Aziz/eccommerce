<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //
    protected $table = 'favorites';
    protected $fillable = [
        'user_id',
        'place_id',
    ];

    public static function rules($request)
    {
        $rules = [
            'user_id' => 'required|integer',
            'place_id' => 'required|integer',
        ];
        return $rules;
    }

    public static function credentials($request)
    {
        $credentials = [
            'user_id' => $request->user_id,
            'place_id' => $request->place_id,
        ];
        return $credentials;
    }
}
