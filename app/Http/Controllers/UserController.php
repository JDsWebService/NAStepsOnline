<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Image;
use Session;
use File;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Grab the user data and put it into an easily accessible variable
        $user = Auth::guard('user')->user();
        // Return view with user data
        return view('user.dashboard')->withUser($user);
    }

    // Show the edit settings page
    public function settings() {
        return view('user.settings');
    }

    // Save User Settings
    public function saveSettings(Request $request) {

        // Validate the Request
        $this->validate($request, [
            'profile_picture' => 'sometimes|image',
        ]);

        // Grab the user from the DB
        $user = User::find(Auth::guard('user')->user()->id);

        // Put request into the user object

        // Check if the request has an image
        if($request->hasFile('profile_picture')) {
            
            // Grab the old filename from the DB
            $oldFilename = $user->profile_picture;

            // Check to see if the user profile picture is not default placeholder
            // This prevents deletion of the default placeholder image
            if($oldFilename !== 'placeholder.png') {
                // Delete the old file
                File::delete('images/users/' . $oldFilename);
            }
            
            // Grab the file out of the request
            $image = $request->file('profile_picture');

            // Created a filename
            $filename = time() . '-' . $user->username . '.' . $image->getClientOriginalExtension();

            // Choose a location for the file
            $location = public_path('images/users/' . $filename);

            // Create the Image, resize it, and save it to the path
            Image::make($image)->resize(160,160)->save($location);

            // Put path into the DB
            $user->profile_picture = $filename;
        }

        // Save user object
        $user->save();

        // Flash Session Success Message
        Session::flash('success', 'Your settings have been saved!');

        // Return the dashboard view
        return redirect()->route('user.dashboard');
    }







    
}
