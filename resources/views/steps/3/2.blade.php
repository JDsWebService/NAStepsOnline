{{-- Step 3 2 --}}
@extends('layouts.stepsection')

@section('title', 'Step 3 // Part 1')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h4 class="text-muted">Making A Decision</h4>
		</div>
	</div>

	<p>As we've already discussed, many of us may find ourselves unnerved by the thought of making a big decision. We may feel intimidated or overwhelmed. We may fear the results or the implied commitment. We may think it's a once-and-for-all action and fear that we won't do it right or have the opportunity to do it over again. However, the decision to turn our will and lives over to the care of the God of our understanding is one we can make over and over again daily if need be. In fact, we're likely to find that we must make this decision regularly, or risk losing our recovery because of complacency.</p>

	<p>It is essential that we involve our hearts and spirits in this decision. Though the word "decision" sounds like something that takes place mostly in the mind, we need to do the work necessary to go beyond an intellectual understanding and internalize this choice.</p>
	
	<ul>
		<li>Why is making a decision central to working this step?</li>
		<li>Can I make this decision just for today? Do I have any fears or reservations about it? What are they?</li>
	</ul>
	
	<p>We need to realize that making a decision without following it up with action is meaningless. For example, we can decide one morning to go somewhere and then sit down and not leave our homes for the rest of that day. Doing so would render our earlier decision meaningless, no more significant than any random thought we may have.</p>
	
	<ul>
		<li>What action have I taken to follow through on my decision?</li>
		<li>What areas of my life are difficult for me to turn over? Why is it important that I turn them over anyway?</li>
	</ul>
	
	<div class="row justify-content-center">
		<div class="col-sm-3">
			<a href="#" class="btn btn-block btn-warning">< Go Back</a>
		</div>
		<div class="col-sm-3">
			<a href="{{ route('step.three.index') }}" class="btn btn-block btn-info">Table of Contents</a>
		</div>
		<div class="col-sm-3">
			<a href="#" class="btn btn-block btn-success">Continue ></a>
		</div>
	</div>

@endsection