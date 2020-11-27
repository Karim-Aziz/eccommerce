<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requests extends Model
{
    //
    protected $table = 'requests';
    protected $fillable = ['name', 'number', 'Address', 'place_id', 'Color', 'Size'];

    public static function rules($request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Color' => 'required|string|max:255',
            'Size' => 'required|string|max:255',
        ];
        return $rules;
    }

    public static function credentials($request)
    {

        $credentials = [
            'name' => $request->name,
            'number' => $request->number,
            'Address' => $request->Address,
            'Color' => $request->Color,
            'Size' => $request->Size,
        ];
        return $credentials;
    }

    public function place()
    {
        return $this->hasOne('App\places', 'id', 'place_id');
    }

}
