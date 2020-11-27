<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    //
    protected $table = 'contact';
    protected $fillable = ['name', 'email', 'message', 'phone'];

    public static function rules($request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]; 
        return $rules;
    }

    public static function credentials($request)
    {
        
        $credentials = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ];
        return $credentials;
    }
}
