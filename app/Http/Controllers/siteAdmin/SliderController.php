<?php

namespace App\Http\Controllers\siteAdmin;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }
    // all Home Slider index
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->get();
        //return view('errors.404');
        return view('siteAdmin.slider.index', compact('sliders'));
    }

    // add new Home Slider
    public function add()
    {
        return view('siteAdmin.slider.add');
    }

    // insert new Home Slider
    public function insert(Request $request)
    {
        $rules = Slider::rules($request);
        $request->validate($rules);

        $slider = Slider::create([]);
        $files = $request->file('images');
        $id = $slider->id;
        Slider::files($files, $id);
        return redirect()->back()->with('success', 'Add success');
    }

    // delete Home Slider
    public function delete($id)
    {
        $slider = Slider::where('id', $id)->first();
        if ($slider) {
            Slider::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

    // delete Home Slider
    public function edit(Request $request, $id)
    {
        $slider = Slider::where('id', $id)->first();

        if ($slider) {
            $rules = Slider::rules_update($request, $id);
            $request->validate($rules);
            //$credentials = Slider::credentials($request);
            $slider->update([]);
            if ($request->file('images') != null) {
                $files = $request->file('images');
                $id = $slider->id;
                Slider::files($files, $id);
            }
            return redirect()->back()->with('success', 'Edit success');
        }
        return view('errors.404');
    }
}
