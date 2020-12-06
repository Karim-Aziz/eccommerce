<?php

namespace App\Http\Controllers\siteAdmin;

use App\Size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SizeController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }

    // all Size index
    public function index()
    {
        $Sizes = Size::orderBy('id', 'desc')->get();
        return view('siteAdmin.Size.index', compact('Sizes'));
    }

    // add new Size
    public function add()
    {
        return view('siteAdmin.Size.add');
    }

    // insert new Size
    public function insert(Request $request)
    {
        $rules = Size::rules($request);
        $request->validate($rules);
        $credentials = Size::credentials($request);
        $Size = Size::create($credentials);
        return redirect()->back()->with('success', 'Add success');
    }

    // delete Size
    public function delete($id)
    {
        $Size = Size::where('id' ,$id)->first();
        if ($Size) {
            Size::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

    // edit Size
    public function edit(Request $request, $id)
    {
        $Size = Size::where('id', $id)->first();
        if ($Size) {
            $rules = Size::rules($request, $id);
            $request->validate($rules);
            $credentials = Size::credentials($request);
            $Size->update($credentials);
            return redirect()->back()->with('success', 'Edit success');
        }
        return view('errors.404');
    }
}
