<?php

namespace App\Http\Controllers;

use App\Cart;
use App\places;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
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
        $userCarts = Auth::user()->Carts;
        return view('Cart.index', compact('userCarts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request, $id)
    {
        //
        $place = places::findOrFail($id);
        //$Cart = Cart::findOrFail($id);
        if ($place) {
            $check_if_exist = Cart::where(['user_id' => Auth::id() , 'place_id' => $id])->first();
            if ($check_if_exist) {
                if (Session::get('app_locale') == 'ar') {
                $message = 'هذا المنتج موجود بالفعل في السلة';
                } else {
                    $message = 'This product is already in the Cart';
                }
                return ['success' => true, 'message' => $message];
            }
            Cart::create(['user_id' => Auth::id() , 'place_id' => $id]);
            if (Session::get('app_locale') == 'ar') {
            $message = 'تمت اضافة المنتج الي السلة';
            } else {
                $message = 'Product Add To Cart ';
            }
            return ['success' => true, 'message' => $message];
        }
    }

    public function total(Request $request, $id)
    {
        //
        $place = places::findOrFail($id);
        if ($place) {
            $cart = Cart::where(['user_id' => Auth::id() , 'place_id' => $id])->first();
            if ($cart) {
                $sum = 0;
                if ($cart->place->sale) {
                    $total = $cart->place->price_after_discount * $cart->quantity;
                } else {
                    $total = $cart->place->price * $cart->quantity;
                }
                $sum = $sum + $total ;
                if (Session::get('app_locale') == 'ar') {
                    $currency = ' جنية ';
                } else {
                    $currency = ' EL ';
                }
                $message = $sum . $currency ;
                return ['success' => true, 'message' => $message];
            }
            if (Session::get('app_locale') == 'ar') {
            $message = 'حدث خطأ';
            } else {
                $message = 'error 404';
            }
            return ['success' => false, 'message' => $message];
        }
    }

    public function plus(Request $request, $id)
    {
        //
        $place = places::findOrFail($id);
        //$Cart = Cart::findOrFail($id);
        if ($place) {
            $check_if_exist = Cart::where(['user_id' => Auth::id() , 'place_id' => $id])->first();
            if ($check_if_exist) {
                $check_if_exist->quantity = $request->value;
                $check_if_exist->save();
                if (Session::get('app_locale') == 'ar') {
                $message = ' تم تغير الكمية ';
                } else {
                    $message = 'The quantity has changed';
                }
                return ['success' => true, 'message' => $message];
            }
            if (Session::get('app_locale') == 'ar') {
            $message = 'حدث خطأ';
            } else {
                $message = 'error 404';
            }
            return ['success' => false, 'message' => $message];
        }
    }
    public function amount(Request $request)
    {
        return ['success' => true, 'message' => Cart::Amount()];
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request, $id)
    {
        //
        $place = places::findOrFail($id);
        if ($place) {
            $check_if_exist = Cart::where(['user_id' => Auth::id() , 'place_id' => $id])->first();
            if (!$check_if_exist) {
                if (Session::get('app_locale') == 'ar') {
                $message = 'هذا المنتج غير موجود بالفعل في السلة';
                } else {
                    $message = 'This product is already not in the Cart';
                }
                return ['success' => true, 'message' => $message];
            }
            Cart::destroy($check_if_exist->id);
            //return redirect()->back()->with('success', 'Deleted success');
            if (Session::get('app_locale') == 'ar') {
            $message = 'تمت إزالة المنتج من السلة';
            } else {
                $message = 'Product Removed From Cart ';
            }
            return ['success' => true, 'message' => $message];
        }
    }
}
