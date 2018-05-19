<?php

namespace App\Http\Controllers;

use Session;
use App\News;
// Request Validation
use App\Http\Requests\NewsFormRequest;

class NewsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin')->except(['show', 'index']);
    }

    /**
     * Display an admin listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
    {
        // Grab all news articles from the DB
        $news = News::orderBy('created_at', 'desc')->paginate(20);

        // Return the Admin Index
        return view('news.admin-index')->withNews($news);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Grab all New Articles from DB
        $news = News::orderBy('created_at', 'desc')->paginate(5);

        // Grab Popular Articles

        // Return the Public Index view of the resource
        return view('news.index')->withNews($news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return the view for the create page
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsFormRequest $request)
    {
        // Return the Validated Request as an object
        $request = (object) $request->validated();

        // Create New News Article
        $news = new News;

        // Grab everything from the request and put into news object
        $news->title = $request->title;
        $news->body = $request->body;

        // Save into the DB
        $news->save();

        // Flash the Session Success Message
        Session::flash('success', 'News Article Successfully saved into the database.');

        // Return Redirect
        return redirect()->route('news.admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsFormRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
