<?php

namespace App\Http\Controllers\siteAdmin;

use App\Clinic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClinicController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }
    // all Articals CAtegories index
    public function index()
    {
        $Clinics = Clinic::orderBy('id', 'desc')->get();
        //return view('errors.404');
        return view('siteAdmin.Clinic.index', compact('Clinics'));
    }

    // add new Articals CAtegories
    public function add()
    {
        return view('siteAdmin.Clinic.add');
    }

    // insert new Articals CAtegories
    public function insert(Request $request)
    {
        $rules = Clinic::rules($request);
        $request->validate($rules);
        $credentials = Clinic::credentials($request);
        $Clinic = Clinic::create($credentials);
        return redirect()->back()->with('success', 'Add success');
    }

    // delete Articals CAtegories
    public function delete($id)
    {
        $Clinic = Clinic::where('id' ,$id)->first();
        if ($Clinic) {
            Clinic::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

    // delete Articals CAtegories
    public function edit(Request $request, $id)
    {
        $Clinic = Clinic::where('id', $id)->first();

        if ($Clinic) {
            $rules = Clinic::rules($request);
            $request->validate($rules);
            $credentials = Clinic::credentials($request);
            $Clinic->update($credentials);
            return redirect()->back()->with('success', 'Edit success');
        }
        return view('errors.404');
    }
}
