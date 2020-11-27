<?php

namespace App\Http\Controllers\siteAdmin;

use App\pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class pagesController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }
    // all Articals CAtegories index
    public function index()
    {
        $pages = pages::orderBy('id', 'desc')->get();
        //return view('errors.404');
        return view('siteAdmin.pages.index', compact('pages'));
    }

    // add new Articals CAtegories
    public function add()
    {
        return view('siteAdmin.pages.add');
    }

    // insert new Articals CAtegories
    public function insert(Request $request)
    {
        $rules = pages::rules($request);
        $request->validate($rules);
        $credentials = pages::credentials($request);
        $pages = pages::create($credentials);
        return redirect()->back()->with('success', 'Add success');
    }

    // delete Articals CAtegories
    public function delete($id)
    {
        $pages = pages::where('id' ,$id)->first();
        if ($pages) {
            pages::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

    // delete Articals CAtegories
    public function edit(Request $request, $id)
    {
        $pages = pages::where('id', $id)->first();

        if ($pages) {
            $rules = pages::rules($request);
            $request->validate($rules);
            $credentials = pages::credentials($request);
            $pages->update($credentials);
            return redirect()->back()->with('success', 'Edit success');
        }
        return view('errors.404');
    }
}
