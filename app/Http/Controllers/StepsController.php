<?php

namespace App\Http\Controllers;

use App\Step;
use Session;
use Purifier;
use App\Http\Requests\StepsFormRequest;

class StepsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the steps dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function stepsDashboard()
    {
        return view('steps.dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Grab all the steps from the database
        $steps = Step::orderBy('number', 'asc')->get();

        // Return the Steps Index Page
        return view('steps.index')->withSteps($steps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return The Steps Create Form
        return view('steps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StepsFormRequest $request)
    {

        // Create new Step Object
        $step = new Step;

        // Place data from request into the Step object
        $step->number = $request->number;
        $step->description = Purifier::clean($request->description);

        // Save the Step Object
        $step->save();

        // Flash the Session
        Session::flash('success', 'The step has been saved successfully to the database.');

        // Return redirect to steps.index
        return redirect()->route('steps.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find the step via ID
        $step = Step::find($id);

        // Return the view with the spcified step
        return view('steps.edit')->withStep($step);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StepsFormRequest $request, $id)
    {
        // Grab the Step via ID
        $step = Step::find($id);

        // Update the Step Object with the new data
        $step->number = $request->number;
        $step->description = Purifier::clean($request->description);

        // Save the Step Object
        $step->save();

        // Flash the Session
        Session::flash('success', 'The step has been successfully edited and saved.');

        // Return Redirect
        return redirect()->route('steps.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the step by the ID
        $step = Step::find($id);

        // Delete the step
        $step->delete();

        // Flash the Session
        Session::flash('success', 'The step has been successfully deleted.');

        // Return Redirect to the index page
        return redirect()->route('steps.index');
    }
}
