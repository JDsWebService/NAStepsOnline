@extends('layouts.stepsection')

@section('title', 'Step Two - Table of Contents')

@section('stylesheets')

	<style type="text/css">
		.section-card {
			height: 100%;
		}
	</style>

@endsection

@section('content')
	
	<div class="row justify-content-center">
		{{-- Step 2 1 --}}
		<div class="col-sm-3 mb-2">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Opening</h5>
					<p class="card-text">
						Step One strips us of our illusions about addiction; Step Two gives us hope for recovery...
					</p>
					<a href="{{ route('step.two.opening') }}" class="card-link">Read More...</a>
				</div>
			</div>
		</div>
	</div>

	<div class="row justify-content-center">
	
		{{-- Step 2 2 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 1</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Hope
					</h6>
					<p class="card-text">
						The hope we get from working Step Two replaces the desperation with which we came into the program...
					</p>
					<a href="{{ route('step.two.section.one') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 2 3 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 2</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Insanity
					</h6>
					<p class="card-text">
						If we have any doubts about the need for a renewal of sanity in our lives, we're going to have trouble with this step...
					</p>
					<a href="{{ route('step.two.section.two') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 2 4 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 3</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Coming to Believe
					</h6>
					<p class="card-text">
						It's important for us to identify and overcome any barriers that could prevent us from coming to believe...
					</p>
					<a href="{{ route('step.two.section.three') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 2 5 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 4</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						A Power Greater Than Ourselves
					</h6>
					<p class="card-text">
						How powerful does a Power greater than ourselves have to be? The answer to that question is simple...
					</p>
					<a href="{{ route('step.two.section.four') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 2 6 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 5</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Restoration to Sanity
					</h6>
					<p class="card-text">
						When we're new in the program, being restored to sanity probably means not having to use anymore...
					</p>
					<a href="{{ route('step.two.section.five') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 2 7 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 6</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Spiritual Principles
					</h6>
					<p class="card-text">
						In the Second Step, we will focus on open-mindedness, willingness, faith, trust, and humility...
					</p>
					<a href="{{ route('step.two.section.six') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 2 8 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 7</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Moving On
					</h6>
					<p class="card-text">
						As we get ready to go on to Step Three, we'll want to take a look at what we've gained by working Step Two...
					</p>
					<a href="{{ route('step.two.section.seven') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

	</div>
	

@endsection