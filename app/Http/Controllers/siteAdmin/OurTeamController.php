<?php

namespace App\Http\Controllers\siteAdmin;

use App\our_team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurTeamController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }
    // all our_team index
    public function index()
    {
        $our_teams = our_team::orderBy('id', 'desc')->get();
        //return view('errors.404');
        return view('siteAdmin.our_team.index', compact('our_teams'));
    }

    // add new our_team
    public function add()
    {
        return view('siteAdmin.our_team.add');
    }

    // insert new our_team
    public function insert(Request $request)
    {
        $rules = our_team::rules($request);
        $request->validate($rules);
        $credentials = our_team::credentials($request);
        $our_team = our_team::create($credentials);
        return redirect()->back()->with('success', 'Add success');
    }

    // delete our_team
    public function delete($id)
    {
        $our_team = our_team::where('id' ,$id)->first();
        if ($our_team) {
            our_team::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

    // delete our_team
    public function edit(Request $request, $id)
    {
        $our_team = our_team::where('id', $id)->first();

        if ($our_team) {
            $rules = our_team::rules($request);
            $request->validate($rules);
            $credentials = our_team::credentials($request);
            $our_team->update($credentials);
            return redirect()->back()->with('success', 'Edit success');
        }
        return view('errors.404');
    }
}
