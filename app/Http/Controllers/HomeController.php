<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function acount()
    {
        $user = Auth::user();
        return view('acount', compact('user'));
    }

    public function editAcount(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        if ($user && $user->id == Auth::user()->id) {
            $rules = User::rules_update($request, $id);
            $request->validate($rules);
            $credentials = User::credentials($request);
            $user->update($credentials);
            if (Session::get('app_locale') == 'ar') {
            $message = 'تم التعديل بنجاح';
            } else {
                $message = 'Add success';
            }
            return redirect()->back()->with('success', $message);
        }
        return view('errors.404');
    }

}
