{{-- Step 1 10 --}}
@extends('layouts.stepsection')

@section('title', 'Step 1 // Part 9')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h4 class="text-muted">Moving On</h4>
		</div>
	</div>

	<p>As we get ready to go on to Step Two, we'll probably find ourselves wondering if we've worked Step One well enough. Are we sure it's time to move on? Have we spent as much time as others may have spent on this step? Have we truly gained an understanding of this step? Many of us have found it helpful to write about our understanding of each step as we prepare to move on.</p>

	<ul>
	<li>How do I know it's time to move on?</li>
	<li>What is my understanding of Step One?</li>
	<li>How has my prior knowledge and experience affected my work on this step?</li>
	</ul>

	<p>We've come to a place where we see the results of our old way of life and accept that a new way is called for, but we probably don't yet see how rich with possibilities the life of recovery is. It may be enough just to have freedom from active addiction right now, but we will soon find that the void we have been filling with drugs or other obsessive and compulsive behaviors begs to be filled. Working the rest of the steps will fill that void. Next on our journey toward recovery is Step Two.</p>

	<div class="row justify-content-center">
		<div class="col-sm-3">
			<a href="#" class="btn btn-block btn-warning">< Go Back</a>
		</div>
		<div class="col-sm-3">
			<a href="{{ route('step.one.index') }}" class="btn btn-block btn-info">Table of Contents</a>
		</div>
		<div class="col-sm-3">
			<a href="#" class="btn btn-block btn-success">Continue ></a>
		</div>
	</div>

@endsection