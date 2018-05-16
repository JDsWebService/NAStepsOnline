<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
	// Set up middleware using the admin guard
	public function __construct() {
		$this->middleware('guest:admin')->except('adminLogout');
	}

	// Show the login form
    public function showLoginForm() {
    	return view('auth.admin-login');
    }

    // login the admin user
    public function login(Request $request) {
    	// Validate the form data
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required'
    	]);

    	// Put the credntials into an array
    	$credentials = [
    		'email' => $request->email,
    		'password' => $request->password,
    	];

    	// Put in the remember boolean from form into variable
    	$remember = $request->remember;

    	// Attempt to login the admin in
    	if(Auth::guard('admin')->attempt($credentials, $remember)) {
    		// if successful then redirect to intended location
    		// Set up default location to admin index
    		return redirect()->intended(route('admin.dashboard'));
    	}

    	// if unsuccessful redirect back to the login with the form data
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adminLogout()
    {
        Auth::guard('admin')->logout();

        return redirect('/');
    }
}
