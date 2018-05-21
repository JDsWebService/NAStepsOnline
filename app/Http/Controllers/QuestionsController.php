<?php

namespace App\Http\Controllers;

use App\Step;
use App\Question;
use Session;
use Purifier;
use App\Http\Requests\QuestionFormRequest;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Grab all the questions out of the database
        $questions = Question::join('steps', 'questions.step_id', '=', 'steps.id')
                                ->orderBy('steps.number', 'asc') 
                                ->select('questions.*')->paginate(25);

        // Return the Index with all the questions
        return view('question.index')->withQuestions($questions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Grab all the Steps from the DB
        $steps = Step::orderBy('number', 'asc')->get();

        // Create Steps Array Variable
        $steps_array = [];

        // Convert steps Into Array
        foreach ($steps as $step) {
            $steps_array[$step->id] = 'Step ' . $step->number;
        }

        // Return the create question view
        return view('question.create')->withSteps($steps_array);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionFormRequest $request)
    {
        // Create New Question Object
        $question = new Question;

        // Store Requst in Object
        $question->step_id = $request->step_id;
        $question->question = Purifier::clean($request->question);

        // Save the Question Object
        $question->save();

        // Flash the Session
        Session::flash('success', 'The question has been saved into the database.');

        // Return Redirect
        return redirect()->route('question.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Grab the question by the ID
        $question = Question::find($id);

        // Grab all the steps from the database
        $steps = Step::orderBy('number', 'asc')->get();

        // Create Steps Array Variable
        $steps_array = [];

        // Convert steps Into Array
        foreach ($steps as $step) {
            $steps_array[$step->id] = 'Step ' . $step->number;
        }

        // return the view with the question
        return view('question.edit')->withQuestion($question)->withSteps($steps_array);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionFormRequest $request, $id)
    {
        // grab the question from the database by ID
        $question = Question::find($id);

        // Store Requst in Object
        $question->step_id = $request->step_id;
        $question->question = Purifier::clean($request->question);

        // Save the Question Object
        $question->save();

        // Flash the Session
        Session::flash('success', 'The question has been edited and saved into the database.');

        // Return Redirect
        return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the Question by the ID
        $question = Question::find($id);

        // Delete the question
        $question->delete();

        // Flash the Session
        Session::flash('success', 'Successfully deleted the question from the database.');

        // Return to the Index
        return redirect()->route('question.index');
    }
}
