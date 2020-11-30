<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $userOrders = Auth::user()->Orders;
        return view('Order.index', compact('userOrders'));
    }

    public function checkout()
    {
        $userCarts = Auth::user()->Carts;
        if ($userCarts) {
            dd($userCarts);
        }
        $carts = Cart::where()->get();
    }


}
