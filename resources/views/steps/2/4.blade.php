{{-- Step 2 4 --}}
@extends('layouts.stepsection')

@section('title', 'Step 2 // Part 3')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h4 class="text-muted">Coming to Believe</h4>
		</div>
	</div>

	<p>The discussion above provided several reasons why we may have trouble with this step. There may be others. It's important for us to identify and overcome any barriers that could prevent us from coming to believe.</p>
	
	<ul>
		<li>Do I have any fears about coming to believe? What are they?</li>
		<li>Do I have any other barriers that make it difficult for me to believe? What are they?</li>
		<li>What does the phrase, "We came to believe...," mean to me?</li>
	</ul>

	<p>As addicts, we're prone to wanting everything to happen instantly. But it's important to remember that Step Two is a process, not an event. Most of us don't just wake up one day and know that a Power greater than ourselves can restore us to sanity. We gradually grow into this belief. Still, we don't have to just sit back and wait for our belief to grow on its own; we can help it along.</p>
	
	<ul>
		<li>Have I ever believed in anything for which I didn't have tangible evidence? What was that experience like?</li>
		<li>What experiences have I heard other recovering addicts share about the process of coming to believe? Have I tried any of them in my life? In what do I believe?</li>
		<li>How has my belief grown since I've been in recovery?</li>
	</ul>

	<div class="row justify-content-center">
		<div class="col-sm-3">
			<a href="#" class="btn btn-block btn-warning">< Go Back</a>
		</div>
		<div class="col-sm-3">
			<a href="{{ route('step.two.index') }}" class="btn btn-block btn-info">Table of Contents</a>
		</div>
		<div class="col-sm-3">
			<a href="#" class="btn btn-block btn-success">Continue ></a>
		</div>
	</div>

@endsection