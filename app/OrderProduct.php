<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    //
    protected $table = 'order_products';
    protected $fillable = [
        'user_id',
        'place_id',
        'order_id',
        'quantity',
        'price',
    ];

    public static function rules($request)
    {
        $rules = [
            'user_id' => 'required|integer',
            'place_id' => 'required|integer',
            'quantity' => 'required|integer',
            'order_id' => 'required|integer',
            'price' => 'required|integer',
        ];
        return $rules;
    }

    public static function Amount()
    {
        $carts = self::where(['user_id' => Auth::id() ])->get();
        $sum = 0;
        foreach ($carts as $cart) {
            if ($cart->place->sale) {
                $total = $cart->place->price_after_discount * $cart->quantity;
            } else {
                $total = $cart->place->price * $cart->quantity;
            }
            $sum = $sum + $total ;
        }
        if (Session::get('app_locale') == 'ar') {
            $currency = ' جنية ';
        } else {
            $currency = ' EL ';
        }
        return $sum . $currency ;
    }

    public static function credentials($request)
    {
        $credentials = [
            'user_id' => $request->user_id,
            'place_id' => $request->place_id,
            'quantity' => $request->quantity,
            'order_id' => $request->order_id,
            'price' => $request->price,
        ];
        return $credentials;
    }

    public function place()
    {
        return $this->hasOne('App\places', 'id', 'place_id');
    }

    public function Order()
    {
        return $this->hasOne('App\Order', 'id', 'order_id');
    }
}
