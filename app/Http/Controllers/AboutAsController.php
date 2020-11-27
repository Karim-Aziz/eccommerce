<?php

namespace App\Http\Controllers;

use App\about_as;
use Illuminate\Http\Request;

class AboutAsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $about_as = about_as::first();
        //return view('errors.404');
        return view('about_as.index', compact('about_as'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\about_as  $about_as
     * @return \Illuminate\Http\Response
     */
    public function show(about_as $about_as)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\about_as  $about_as
     * @return \Illuminate\Http\Response
     */
    public function edit(about_as $about_as)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\about_as  $about_as
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, about_as $about_as)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\about_as  $about_as
     * @return \Illuminate\Http\Response
     */
    public function destroy(about_as $about_as)
    {
        //
    }
}
