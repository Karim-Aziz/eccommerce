<?php

namespace App\Http\Controllers\siteAdmin;

use App\home_desc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeDescController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }
    // all Home Slider index
    public function index()
    {
        $home_descs = home_desc::orderBy('id', 'desc')->get();
        //return view('errors.404');
        return view('siteAdmin.home_desc.index', compact('home_descs'));
    }

    // add new Home Slider
    public function add()
    {
        return view('siteAdmin.home_desc.add');
    }

    // insert new Home Slider
    public function insert(Request $request)
    {
        $rules = home_desc::rules($request);
        $request->validate($rules);
        $credentials = home_desc::credentials($request);
        $home_desc = home_desc::create($credentials);
        $files = $request->file('images');
        $id = $home_desc->id;
        home_desc::files($files, $id);
        return redirect()->back()->with('success', 'Add success');
    }

    // delete Home Slider
    public function delete($id)
    {
        $home_desc = home_desc::where('id' ,$id)->first();
        if ($home_desc) {
            home_desc::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

    // delete Home Slider
    public function edit(Request $request, $id)
    {
        $home_desc = home_desc::where('id', $id)->first();

        if ($home_desc) {
            $rules = home_desc::rules($request);
            $request->validate($rules);
            $credentials = home_desc::credentials($request);
            $home_desc->update($credentials);
            return redirect()->back()->with('success', 'Edit success');
        }
        return view('errors.404');
    }
}
