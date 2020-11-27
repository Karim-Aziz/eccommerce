<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pages extends Model
{
    //
    protected $table = 'pages';
    protected $fillable = ['name', 'name_ar'];

    public function places()
    {
        return $this->hasMany('App\places', 'page_id', 'id');
    }
   

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
