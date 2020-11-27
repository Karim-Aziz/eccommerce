<?php

namespace App\Http\Controllers\siteAdmin;

use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }
    // all Testimonial index
    public function index()
    {
        $Testimonials = Testimonial::orderBy('id', 'desc')->get();
        //return view('errors.404');
        return view('siteAdmin.Testimonial.index', compact('Testimonials'));
    }

    // add new Testimonial
    public function add()
    {
        return view('siteAdmin.Testimonial.add');
    }

    // insert new Testimonial
    public function insert(Request $request)
    {
        $rules = Testimonial::rules($request);
        $request->validate($rules);
        $credentials = Testimonial::credentials($request);
        $Testimonial = Testimonial::create($credentials);
        return redirect()->back()->with('success', 'Add success');
    }

    // delete Testimonial
    public function delete($id)
    {
        $Testimonial = Testimonial::where('id' ,$id)->first();
        if ($Testimonial) {
            Testimonial::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

    // delete Testimonial
    public function edit(Request $request, $id)
    {
        $Testimonial = Testimonial::where('id', $id)->first();

        if ($Testimonial) {
            $rules = Testimonial::rules($request);
            $request->validate($rules);
            $credentials = Testimonial::credentials($request);
            $Testimonial->update($credentials);
            return redirect()->back()->with('success', 'Edit success');
        }
        return view('errors.404');
    }
}
