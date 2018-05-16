<?php

namespace App\Http\Controllers;

use App\JustForToday;
use Illuminate\Http\Request;

class JustForTodayController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin')->except('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * @param  \App\JustForToday  $justForToday
     * @return \Illuminate\Http\Response
     */
    public function show(JustForToday $justForToday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JustForToday  $justForToday
     * @return \Illuminate\Http\Response
     */
    public function edit(JustForToday $justForToday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JustForToday  $justForToday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JustForToday $justForToday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JustForToday  $justForToday
     * @return \Illuminate\Http\Response
     */
    public function destroy(JustForToday $justForToday)
    {
        //
    }
}
