<?php

namespace App\Http\Controllers\siteAdmin;

use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }
    // all Video index
    public function index()
    {
        $Videos = Video::orderBy('id', 'desc')->get();
        //return view('errors.404');
        return view('siteAdmin.Video.index', compact('Videos'));
    }

    // add new Video
    public function add()
    {
        return view('siteAdmin.Video.add');
    }

    // insert new Video
    public function insert(Request $request)
    {
        $rules = Video::rules($request);
        $request->validate($rules);
        $credentials = Video::credentials($request);
        $Video = Video::create($credentials);
        return redirect()->back()->with('success', 'Add success');
    }

    // delete Video
    public function delete($id)
    {
        $Video = Video::where('id' ,$id)->first();
        if ($Video) {
            Video::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

    // delete Video
    public function edit(Request $request, $id)
    {
        $Video = Video::where('id', $id)->first();

        if ($Video) {
            $rules = Video::rules($request);
            $request->validate($rules);
            $credentials = Video::credentials($request);
            $Video->update($credentials);
            return redirect()->back()->with('success', 'Edit success');
        }
        return view('errors.404');
    }
}
