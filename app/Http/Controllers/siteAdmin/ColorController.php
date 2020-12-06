<?php

namespace App\Http\Controllers\siteAdmin;

use App\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }

    // all Color index
    public function index()
    {
        $Colors = Color::orderBy('id', 'desc')->get();
        return view('siteAdmin.Color.index', compact('Colors'));
    }

    // add new Color
    public function add()
    {
        return view('siteAdmin.Color.add');
    }

    // insert new Color
    public function insert(Request $request)
    {
        $rules = Color::rules($request);
        $request->validate($rules);
        $credentials = Color::credentials($request);
        $Color = Color::create($credentials);
        return redirect()->back()->with('success', 'Add success');
    }

    // delete Color
    public function delete($id)
    {
        $Color = Color::where('id' ,$id)->first();
        if ($Color) {
            Color::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

    // edit Color
    public function edit(Request $request, $id)
    {
        $Color = Color::where('id', $id)->first();
        if ($Color) {
            $rules = Color::rules($request, $id);
            $request->validate($rules);
            $credentials = Color::credentials($request);
            $Color->update($credentials);
            return redirect()->back()->with('success', 'Edit success');
        }
        return view('errors.404');
    }
}
