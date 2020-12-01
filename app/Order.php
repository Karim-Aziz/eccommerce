<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'amount',
        'status',
    ];

    public static function rules($request)
    {
        $rules = [
            'user_id' => 'required|integer',
            'status' => 'required|integer',
            'amount' => 'required|string|max:255',
        ];
        return $rules;
    }


    public static function credentials($request)
    {
        $credentials = [
            'user_id' => $request->user_id,
            'amount' => $request->amount,
            'status' => $request->status,
        ];
        return $credentials;
    }


    public function User()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }


    public function product()
    {
        return $this->hasMany('App\OrderProduct', 'order_id', 'id');
    }



    public function places()
    {
        return $this->belongsToMany('App\places', 'order_products', 'order_id', 'place_id');
    }
}
