<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Cart extends Model
{
    //
    protected $table = 'carts';
    protected $fillable = [
        'user_id',
        'place_id',
        'quantity',
    ];

    public static function rules($request)
    {
        $rules = [
            'user_id' => 'required|integer',
            'place_id' => 'required|integer',
            'quantity' => 'required|integer',
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
        ];
        return $credentials;
    }

    public function place()
    {
        return $this->hasOne('App\places', 'id', 'place_id');
    }

}
