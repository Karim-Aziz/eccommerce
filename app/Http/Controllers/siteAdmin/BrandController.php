<?php

namespace App\Http\Controllers\siteAdmin;

use App\brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }

    // all brand index
    public function index()
    {
        $brands = brand::orderBy('id', 'desc')->get();
        //return view('errors.404');
        return view('siteAdmin.brand.index', compact('brands'));
    }

    // add new brand
    public function add()
    {
        return view('siteAdmin.brand.add');
    }

    // insert new brand
    public function insert(Request $request)
    {
        $rules = brand::rules($request);
        $request->validate($rules);
        $credentials = brand::credentials($request);
        $brand = brand::create($credentials);
        return redirect()->back()->with('success', 'Add success');
    }

    // delete brand
    public function delete($id)
    {
        $brand = brand::where('id' ,$id)->first();
        if ($brand) {
            brand::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

    // delete brand
    public function edit(Request $request, $id)
    {
        $brand = brand::where('id', $id)->first();

        if ($brand) {
            $rules = brand::rules($request, $id);
            $request->validate($rules);
            $credentials = brand::credentials($request);
            $brand->update($credentials);
            return redirect()->back()->with('success', 'Edit success');
        }
        return view('errors.404');
    }
}
