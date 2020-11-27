<?php

namespace App\Http\Controllers\siteAdmin;

use App\settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class settingsController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }
    // show settings
    public function index()
    {
        $settings = settings::first();
        return view('siteAdmin.settings.index', compact('settings'));
    }

    // edit settings
    public function edit(Request $request)
    {
        $settings = settings::first();
        if ($settings) {
            $rules = settings::rules($request);
            $request->validate($rules);
            $credentials = settings::credentials($request);
            $settings->update($credentials);
            return redirect()->back()->with('success', 'Edit success');
        }else {
            $settings = new settings();
            $rules = settings::rules($request);
            $request->validate($rules);
            $credentials = settings::credentials($request);
            $settings::create($credentials);
            return redirect()->back()->with('success', 'Edit success');
        }
        return view('errors.404');
    }
}
