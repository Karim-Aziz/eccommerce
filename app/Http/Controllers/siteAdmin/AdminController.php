<?php

namespace App\Http\Controllers\siteAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Admin');
    }

    // admin panel index
    public function index()
    {
        //return view('view.name', compact($data));
        return view('siteAdmin.index');
    }
}
