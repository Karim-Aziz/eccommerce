<?php

namespace App\Http\Controllers\siteAdmin;

use App\requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class requestsController extends Controller
{
    // check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }
    // show conttact maessages
    public function index()
    {
        $requests = requests::orderBy('id', 'desc')->get();
        return view('siteAdmin.requests.index', compact('requests'));
    }

    // delete Post
    public function delete($id)
    {
        $requests = requests::where('id' ,$id)->first();
        if ($requests) {
            requests::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

}
