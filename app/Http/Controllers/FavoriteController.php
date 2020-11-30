<?php

namespace App\Http\Controllers;

use App\places;
use App\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FavoriteController extends Controller
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
        $userFavorites = Auth::user()->Favorites;
        return view('favorite.index', compact('userFavorites'));
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
        //$favorite = Favorite::findOrFail($id);
        if ($place) {
            $check_if_exist = Favorite::where(['user_id' => Auth::id() , 'place_id' => $id])->first();
            if ($check_if_exist) {
                if (Session::get('app_locale') == 'ar') {
                $message = 'هذا المنتج موجود بالفعل في المفضلة';
                } else {
                    $message = 'This product is already in the favorites';
                }
                return ['success' => true, 'message' => $message];
            }
            Favorite::create(['user_id' => Auth::id() , 'place_id' => $id]);
            if (Session::get('app_locale') == 'ar') {
            $message = 'تمت اضافة المنتج الي المفضلة';
            } else {
                $message = 'New Favorite created !!';
            }
            return ['success' => true, 'message' => $message];
        }
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
            $check_if_exist = Favorite::where(['user_id' => Auth::id() , 'place_id' => $id])->first();
            if (!$check_if_exist) {
                if (Session::get('app_locale') == 'ar') {
                $message = 'هذا المنتج غير موجود بالفعل في المفضلة';
                } else {
                    $message = 'This product is already not in the favorites';
                }
                return ['success' => true, 'message' => $message];
            }
            Favorite::destroy($check_if_exist->id);
            //return redirect()->back()->with('success', 'Deleted success');
            if (Session::get('app_locale') == 'ar') {
            $message = 'تمت إزالة المنتج من المفضلة';
            } else {
                $message = 'Product Removed From Favorites !!';
            }
            return ['success' => true, 'message' => $message];
        }
    }


}
