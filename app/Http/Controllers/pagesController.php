<?php

namespace App\Http\Controllers;

use App\pages;
use App\places;
use App\requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class pagesController extends Controller
{
    //

    public function index()
    {
        $pages = pages::orderBy('id', 'desc')->get();
        return view('pages.place', compact('pages'));
    }

    // show  page
    public function show($id)
    {
        $page = pages::findOrFail($id);
        $place = places::where('page_id', $page->id)->first();
        $places = places::where('id', '!=', $place->id )->where('page_id', $page->id)->orderBy('id', 'DESC')->get()->take(5);
        return view('pages.show', compact(['page', 'places', 'place']));
    }
    // show  post
    public function place($id)
    {
        $place = places::findOrFail($id);
        $places = places::where('id', '!=', $place->id )->where('page_id', $place->page_id)->orderBy('id', 'decs')->get()->take(5);
        return view('pages.place', compact(['place', 'places']));
    }

    public function search(Request $request)
    {
        if ($request->title) {
            $title = $request->title;
            $places = places::where('title', 'LIKE', "%{$title}%")->orWhere('title_ar', 'LIKE', "%{$title}%")->orderBy('id', 'decs')->get()->take(10);
            return view('pages.search', compact([ 'places']));
        } elseif ($request->title == null) {
            $places = places::orderBy('id', 'decs')->get()->take(10);
            return view('pages.search', compact([ 'places']));
        }
        return view('errors.404');
    }
    // show  post
    public function requests(Request $request,$id)
    {
        $place = places::findOrFail($id);
        $rules = requests::rules($request);
        $request->validate($rules);
        $credentials = requests::credentials($request);
        $credentials['place_id'] = $id;
        $requests = requests::create($credentials);
        if (App::isLocale('ar')) {
            $message = 'تمت الاضافه بنجاح';
        } else {
            $message = 'Add success';
        }
        return redirect()->back()->with('success', $message);
    }
}
