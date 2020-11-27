<?php

namespace App\Http\Controllers;

use App\services;
use Illuminate\Http\Request;

class servicesController extends Controller
{
    //
    public function index()
    {
        $services = services::first();
        return view('services.index', compact('services'));
    }
}
