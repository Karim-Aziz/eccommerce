<?php

namespace App\Http\Controllers\siteAdmin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }

    // all user index
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        //return view('errors.404');
        return view('siteAdmin.user.index', compact('users'));
    }

    // add new user
    public function add()
    {
        return view('siteAdmin.user.add');
    }

    // insert new user
    public function insert(Request $request)
    {
        $rules = User::rules($request);
        $request->validate($rules);
        $credentials = User::credentials($request);
        $user = User::create($credentials);
        return redirect()->back()->with('success', 'Add success');
    }

    // delete user
    public function delete($id)
    {
        $user = User::where('id' ,$id)->first();
        if ($user) {
            User::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

    // delete user
    public function edit(Request $request, $id)
    {
        $user = User::where('id', $id)->first();

        if ($user) {
            $rules = User::rules_update($request, $id);
            $request->validate($rules);
            $credentials = User::credentials($request);
            $user->update($credentials);
            return redirect()->back()->with('success', 'Edit success');
        }
        return view('errors.404');
    }
}
