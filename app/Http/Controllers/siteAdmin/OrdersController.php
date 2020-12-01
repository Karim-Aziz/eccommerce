<?php

namespace App\Http\Controllers\siteAdmin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }
    // show conttact maessages
    public function index()
    {
        $Orders = Order::orderBy('id', 'desc')->get();
        return view('siteAdmin.Orders.index', compact('Orders'));
    }

    // delete Post
    public function delete($id)
    {
        $Orders = Order::where('id' ,$id)->first();
        if ($Orders) {
            Order::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

}
