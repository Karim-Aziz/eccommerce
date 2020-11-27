<?php

namespace App\Http\Controllers\siteAdmin;

use App\contact;
use App\settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactController extends Controller
{
    /// check if is admin
    public function __construct()
    {
        $this->middleware('Admin');
    }
    // show conttact maessages
    public function index()
    {
        $settings = settings::first();
        $contacts = contact::orderBy('id', 'desc')->get();
        return view('siteAdmin.contact.index', compact(['contacts', 'settings']));
    }

    // delete Post
    public function delete($id)
    {
        $contact = contact::where('id' ,$id)->first();
        if ($contact) {
            contact::destroy($id);
            return redirect()->back()->with('success', 'Deleted success');
        }
        return view('errors.404');
    }

}
