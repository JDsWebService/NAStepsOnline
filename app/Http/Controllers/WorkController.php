<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class WorkController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        // Grab the user data and put it into an easily accessible variable
        $user = Auth::user();

        // Return view with user data
        return view('work.dashboard')->withUser($user);
    }
}
