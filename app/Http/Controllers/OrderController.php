<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$userOrders = Auth::user()->Orders;
        $userOrders = Order::where(['user_id' => Auth::id()])->get();
        return view('Order.index', compact('userOrders'));
    }

    public function checkout()
    {
        //$userCarts = Auth::user()->Carts;
        $userCarts = Cart::where(['user_id' => Auth::id()])->get();
        if ($userCarts->count() > 0) {
            $Order = Order::create([
                'user_id' => Auth::id(),
                'status' => 0 ,
                'amount' => Cart::Amount(),
            ]);
            if ($Order->id) {
                foreach ($userCarts as $cart) {
                    OrderProduct::create([
                        'user_id' => $cart->user_id,
                        'place_id' => $cart->place->id,
                        'quantity' => $cart->quantity,
                        'order_id' => $Order->id,
                        'price' => $cart->place->sale ? $cart->place->price_after_discount : $cart->place->price,
                    ]);
                }
                foreach ($userCarts as $cart) {
                    Cart::destroy($cart->id);
                }
            }
            if (Session::get('app_locale') == 'ar') {
                $message = 'تم طلب المنتجات بنجاح';
            } else {
                $message = 'Products have been ordered successfully';
            }
            return ['success' => true , 'message' => $message];
        }
        if (Session::get('app_locale') == 'ar') {
            $message = 'حدث خطأ';
        } else {
            $message = 'error 404';
        }
        return ['success' => false, 'message' => $message];
    }
}
