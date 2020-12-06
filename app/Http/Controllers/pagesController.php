<?php

namespace App\Http\Controllers;

use App\pages;
use App\places;
use App\requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
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
    public function show(Request $request, $id)
    {
        $show = $request->show ? $request->show : 12;
        $sort = $request->sort ? $request->sort : null;
        $size = $request->size ? $request->size : null;
        $color = $request->color ? $request->color : null;
        $page = pages::findOrFail($id);
        $query = places::where('page_id', $page->id);
        if ($color) {
            if (Session::get('app_locale') == 'ar') {
                $query =$query->whereHas('colors_main', function ($query) use ($color){
                    $query->where('name_ar', $color);
                });
            } else {
                $query =$query->whereHas('colors_main', function ($query) use ($color){
                    $query->where('name', $color);
                });
            }
        }
        if ($size) {
            if (Session::get('app_locale') == 'ar') {
                $query =$query->whereHas('sizes_main', function ($query) use ($size){
                    $query->where('name_ar', $size);
                });
            } else {
                $query =$query->whereHas('sizes_main', function ($query) use ($size){
                    $query->where('name', $size);
                });
            }
        }
        if ($sort) {
            switch ($sort) {
                case 'Title':
                    if (Session::get('app_locale') == 'ar') {
                        $query =$query->orderBy('title_ar','asc');
                    }else {
                        $query =$query->orderBy('title','asc');
                    }
                    break;
                case 'Price':
                    $query =$query->orderBy('Price','desc');
                    break;
                case 'Date':
                    $query =$query->orderBy('created_at','desc');
                    break;
                default:
                    $query =$query->orderBy('id','desc');
                    break;
            }
        } else {
            $query =$query->orderBy('id','desc');
        }
        $places = $query->paginate($show)->appends(Input::all()) ;
        $pages = pages::all();
        return view('pages.show', compact(['page', 'places', 'pages']));
    }
    // show  post
    public function place($id)
    {
        $place = places::findOrFail($id);
        if ($place) {
            $place->view = $place->view + 1 ;
            $place->save();
            return view('pages.place', compact(['place']));
        }
        return view('errors.404');
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
        if (Session::get('app_locale') == 'ar') {
            $message = 'تمت الاضافه بنجاح';
        } else {
            $message = 'Add success';
        }
        return redirect()->back()->with('success', $message);
    }
}
