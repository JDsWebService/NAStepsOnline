<?php

namespace App\Http\Controllers;

use Session;
use Purifier;
use App\JustForToday;
// Request Validation
use App\Http\Requests\JFTFormRequest;

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
        // Grab the Just For Today's from the database and paginate the results
        $jft = JustForToday::orderBy('date', 'asc')->paginate(20);

        // Return the view with the data
        return view('jft.index')->withJft($jft);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return the Creatation View
        return view('jft.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\JFTFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JFTFormRequest $request)
    {
        // Return the Validated Request as an object
        $request = (object) $request->validated();

        // Create new JFT Object
        $jft = new JustForToday;

        // Place request into JFT Object
        $jft->title = Purifier::clean($request->title);
        $jft->jft_page = Purifier::clean($request->jft_page);
        $jft->bt_quote = Purifier::clean($request->bt_quote);
        $jft->bt_page = Purifier::clean($request->bt_page);
        $jft->body = Purifier::clean($request->body);
        $jft->jft_end = Purifier::clean($request->jft_end);

        // Figure out the date
        $month = $request->month;
        $day = $request->day;
        // convert string into unix time using strtotime function
        // The convert string into the date format using date function
        $date = date('Y-m-d', strtotime('1004-' . $month . '-' . $day));
        // Insert date into the jft object
        $jft->date = $date;

        // Save into DB
        $jft->save();

        // Flash Success Message
        Session::flash('success', 'The Just For Today has been added to the database');

        // Redirect to JFT Index
        return redirect()->route('jft.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JustForToday  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        return view('jft.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JustForToday  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Grab the JFT from the id
        $jft = JustForToday::find($id);

        // Extract the month and day from the date
        $month = date('n', strtotime($jft->date));
        $day = date('j', strtotime($jft->date));

        // Insert month and date into the JFT Object
        $jft->month = $month;
        $jft->day = $day;

        // Return the Edit JFT Form with the jft object
        return view('jft.edit')->withJft($jft);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\JFTFormRequest  $request
     * @param  \App\JustForToday  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JFTFormRequest $request, $id)
    {
        // Grab the Form Request data and convert uysing typecasting
        $request = (object) $request->validated();

        // Grab the JFT from the database using the id
        $jft = JustForToday::find($id);

        // Update the Object from the request
        $jft->title = Purifier::clean($request->title);
        $jft->jft_page = Purifier::clean($request->jft_page);
        $jft->bt_quote = Purifier::clean($request->bt_quote);
        $jft->bt_page = Purifier::clean($request->bt_page);
        $jft->body = Purifier::clean($request->body);
        $jft->jft_end = Purifier::clean($request->jft_end);

        // Figure out the date
        $month = $request->month;
        $day = $request->day;
        // convert string into unix time using strtotime function
        // The convert string into the date format using date function
        $date = date('Y-m-d', strtotime('1004-' . $month . '-' . $day));
        // Insert date into the jft object
        $jft->date = $date;

        // Save into DB
        $jft->save();

        // Flash Success Message
        Session::flash('success', 'The Just For Today has been updated in the database');

        // Redirect to JFT Index
        return redirect()->route('jft.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JustForToday  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the JFT Reading by id
        $jft = JustForToday::find($id);

        // Delete from the Database
        $jft->delete();

        // Session Flash
        Session::flash('success', 'The Just for Today Reading has been deleted');

        // Return the index
        return redirect()->route('jft.index');
    }

}
