<?php

namespace App\Http\Controllers;

use Session;
use App\News;
use DB;
use Purifier;
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
    public function publicIndex()
    {
        // Grab all New Articles from DB
        $news = News::orderBy('created_at', 'desc')->paginate(5);

        // Grab Popular Articles
        $popular = News::orderby('hits', 'desc')->limit(8)->get();

        // Return the Public Index view of the resource
        return view('news.index')->withNews($news)->withPopular($popular);
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
        $article = new News;

        // Grab everything from the request and put into article object
        $article->title = $request->title;
        $article->body = Purifier::clean($request->body);

        // Save into the DB
        $article->save();

        // Generate the Slug
        $slug = $this->GenerateSlug($request->title, $article->id);

        // Put the slug into the Article Object
        $article->slug = $slug;

        // Save the Article Once more to include the slug
        $article->save();

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
    public function show($slug)
    {
        // Grab the new article via ID from the Database
        $article = News::where('slug', '=', $slug)->first();

        // Increase the Hit Counter by 1
        $article->hits += 1;

        // Save the hitcounter
        $article->save();

        // Return the view with the news article
        return view('news.show')->withArticle($article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Grab the Article From the DB
        $article = News::find($id);

        // Return the edit view along with the article data
        return view('news.edit')->withArticle($article);
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
        // Return the Validated Request as an object
        $request = (object) $request->validated();

        // Grab the article from the DB
        $article = News::find($id);

        // Assign new values to the article object from the request
        $article->title = $request->title;
        $article->body = Purifier::clean($request->body);

        // Generate the Slug
        $slug = $this->GenerateSlug($request->title, $article->id);

        // Put the slug into the Article Object
        $article->slug = $slug;

        // Save the Request
        $article->save();

        // Flash the Session
        Session::flash('success', 'The article has been successfullly saved to the database.');

        // Redirect to the Admin Index
        return redirect()->route('news.admin.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the Article by ID in the database
        $article = News::find($id);

        // Delete the Article from the DB
        $article->delete();

        // Flash the session
        Session::flash('success', 'The article has been deleted from the database.');

        // Return redirect
        return redirect()->route('news.admin.index');

    }

    /**
     * Generate the Slug for the Aritcle
     *
     * @param  str  $title  The title of the Article
     * @param  int. $id     The id of the article
     * @return str  $slug   The generated slug
     */
    protected function GenerateSlug($title, $id) {

        // Replace all double hypens and spaces with hypens
        $slug = preg_replace('#[ -]+#', '-', $title);

        // Trim the slug of the article to 240 characters
        $slug = substr($slug, 0, 239);

        // Append the ID of the Article to the front of the slug
        $slug = $id . '-' . $slug;

        // Return the slug
        return $slug;
    }
}
