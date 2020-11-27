<?php

namespace App\Http\Controllers\siteAdmin;

use App\about_as;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutAsController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }
    // all Home Slider index
    public function index()
    {
        $about_as = about_as::orderBy('id', 'desc')->get();
        //return view('errors.404');
        return view('siteAdmin.about_as.index', compact('about_as'));
    }

    // add new Home Slider
    public function add()
    {
        return view('siteAdmin.about_as.add');
    }

    // insert new Home Slider
    public function insert(Request $request)
    {
        $rules = about_as::rules($request);
        $request->validate($rules);
        $credentials = about_as::credentials($request);
        $about_as = about_as::create($credentials);
        $files = $request->file('images');
        $id = $about_as->id;
        about_as::files($files, $id);
        return redirect()->back()->with('success', 'Add success');
    }

    // delete Home Slider
    public function delete($id)
    {
        $about_as = about_as::where('id', $id)->first();
        if ($about_as) {
            about_as::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

    // delete Home Slider
    public function edit(Request $request, $id)
    {
        $about_as = about_as::where('id', $id)->first();
        if ($about_as) {
            $rules = about_as::rules($request);
            $request->validate($rules);
            $credentials = about_as::credentials($request);
            $about_as->update($credentials);
            return redirect()->back()->with('success', 'Edit success');
        }
        return view('errors.404');
    }
}
