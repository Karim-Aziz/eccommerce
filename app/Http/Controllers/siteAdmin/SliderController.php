<?php

namespace App\Http\Controllers\siteAdmin;

use App\Image;
use App\Slider;
use App\slider_images;
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
        $slider = Slider::first();
        //return view('errors.404');
        return view('siteAdmin.slider.index', compact('slider'));
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
        $file = $request->file('image');
        Slider::file($file);
        return redirect()->back()->with('success', 'Add success');
    }

    // delete Home Slider
    public function delete($id)
    {
        $slider = Slider::first();
        $slider_images = slider_images::where(['image_id' => $id, 'slider_id' => $slider->id])->first();
        slider_images::destroy($slider_images->id);
        $Image = Image::findOrFail($id);
        unlink(public_path() . '/img/slider_images/'.$Image->name);
        Image::destroy($id);
        return redirect()->back()->with('success', 'Deleted success');
    }

    // delete Home Slider
    public function edit(Request $request, $id)
    {
        $rules = Slider::rules($request);
        $request->validate($rules);
        $slider = Slider::first();
        $slider_images = slider_images::where(['image_id' => $id, 'slider_id' => $slider->id])->first();
        slider_images::destroy($slider_images->id);
        $Image = Image::findOrFail($id);
        unlink(public_path() . '/img/slider_images/'.$Image->name);
        Image::destroy($id);
        $file = $request->file('image');
        Slider::file($file);
        return redirect()->back()->with('success', 'Edit success');
    }
}
