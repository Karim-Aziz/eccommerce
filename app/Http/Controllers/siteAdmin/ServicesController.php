<?php

namespace App\Http\Controllers\siteAdmin;

use App\services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }
    // all services index
    public function index()
    {
        $servicess = services::orderBy('id', 'desc')->get();
        //return view('errors.404');
        return view('siteAdmin.services.index', compact('servicess'));
    }

    // add new services
    public function add()
    {
        return view('siteAdmin.services.add');
    }

    // insert new services
    public function insert(Request $request)
    {
        $rules = services::rules($request);
        $request->validate($rules);
        $credentials = services::credentials($request);
        $services = services::create($credentials);
        return redirect()->back()->with('success', 'Add success');
    }

    // delete services
    public function delete($id)
    {
        $services = services::where('id' ,$id)->first();
        if ($services) {
            services::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

    // delete services
    public function edit(Request $request, $id)
    {
        $services = services::where('id', $id)->first();

        if ($services) {
            $rules = services::rules($request);
            $request->validate($rules);
            $credentials = services::credentials($request);
            $services->update($credentials);
            return redirect()->back()->with('success', 'Edit success');
        }
        return view('errors.404');
    }
}
