<?php

namespace App\Http\Controllers\siteAdmin;

use App\places;
use App\SizePlace;
use App\ColorPlace;
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
        if ($request->color != NULL) {
                $olds = ColorPlace::where('place_id', $places->id)->get();
                if ($olds->count() > 0) {
                    foreach ($olds as  $old) {
                        ColorPlace::destroy($old->id);
                    }
                }
                foreach ($request->color as $value) {
                    ColorPlace::create([ 'place_id' => $places->id, 'color_id' => $value]);
                }
            }
            if ($request->size != NULL) {
                $olds = SizePlace::where('place_id', $places->id)->get();
                if ($olds->count() > 0) {
                    foreach ($olds as  $old) {
                        SizePlace::destroy($old->id);
                    }
                }
                foreach ($request->size as $value) {
                    SizePlace::create([ 'place_id' => $places->id, 'size_id' => $value]);
                }
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
            if ($request->color != NULL) {
                $olds = ColorPlace::where('place_id', $places->id)->get();
                if ($olds->count() > 0) {
                    foreach ($olds as  $old) {
                        ColorPlace::destroy($old->id);
                    }
                }
                foreach ($request->color as $value) {
                    ColorPlace::create([ 'place_id' => $places->id, 'color_id' => $value]);
                }
            }
            if ($request->size != NULL) {
                $olds = SizePlace::where('place_id', $places->id)->get();
                if ($olds->count() > 0) {
                    foreach ($olds as  $old) {
                        SizePlace::destroy($old->id);
                    }
                }
                foreach ($request->size as $value) {
                    SizePlace::create([ 'place_id' => $places->id, 'size_id' => $value]);
                }
            }
            return redirect()->back()->with('success', 'Edit success');
        }
    }
}
