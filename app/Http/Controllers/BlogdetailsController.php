<?php

namespace App\Http\Controllers;

use App\Models\blogdetails;
use Illuminate\Http\Request;

class BlogdetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('blogdetail');
        //
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
     * @param  \App\Models\blogdetails  $blogdetails
     * @return \Illuminate\Http\Response
     */
    public function show(blogdetails $blogdetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blogdetails  $blogdetails
     * @return \Illuminate\Http\Response
     */
    public function edit(blogdetails $blogdetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blogdetails  $blogdetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blogdetails $blogdetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blogdetails  $blogdetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(blogdetails $blogdetails)
    {
        //
    }
}
