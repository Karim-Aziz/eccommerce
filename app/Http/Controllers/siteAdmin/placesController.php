<?php

namespace App\Http\Controllers\siteAdmin;

use App\places;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class placesController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }
    // all Post index
    public function index()
    {
        $places = places::orderBy('id', 'desc')->get();
        //return view('errors.404');
        return view('siteAdmin.places.index', compact('places'));
    }

    // add new Post
    public function add()
    {
        return view('siteAdmin.places.add');
    }

    // insert new Post
    public function insert(Request $request)
    {
        $rules = places::rules($request);
        $request->validate($rules);
        $credentials = places::credentials($request);
        $places = places::create($credentials);
        if ($request->file('images') != NULL) {
            $files = $request->file('images');
            $id = $places->id;
            places::files($files, $id);
        }
        return redirect()->back()->with('success', 'Add success');
    }

    // delete Post
    public function delete($id)
    {
        $places = places::where('id' ,$id)->first();
        if ($places) {
            places::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

    // delete Post
    public function edit(Request $request, $id)
    {
        $places = places::where('id', $id)->first();

        if ($places) {
            $rules = places::rules_update($request);
            $request->validate($rules);
            $credentials = places::credentials($request);
            $places->update($credentials);
            if ($request->file('images') != NULL) {
                $files = $request->file('images');
                $id = $places->id;
                places::files($files, $id);
            }
            return redirect()->back()->with('success', 'Edit success');
        }
    }
}
