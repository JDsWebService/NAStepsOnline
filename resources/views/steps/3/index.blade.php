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
						Acceptance allows evasion and denial give way to reality and peace...
					</p>
					<a href="{{ route('step.three.opening') }}" class="card-link">Read More...</a>
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
						Making A Decision
					</h6>
					<p class="card-text">
						It is essential that we involve our hearts and spirits in this decision...
					</p>
					<a href="{{ route('step.three.section.one') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 2 3 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 2</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Self-Will
					</h6>
					<p class="card-text">
						Step Three is critical because we've acted on self-will for so long, abusing our right to make choices and decisions...
					</p>
					<a href="{{ route('step.three.section.two') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 2 4 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 3</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						The God of Our Understanding
					</h6>
					<p class="card-text">
						Our Basic Text suggests that we choose an understanding of our Higher Power that is loving and caring and greater than ourselves...
					</p>
					<a href="{{ route('step.three.section.three') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 2 5 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 4</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Turning It Over
					</h6>
					<p class="card-text">
						The order in which we prepare to surrender our will and our lives to the care of the God of our understanding is significant...
					</p>
					<a href="{{ route('step.three.section.four') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 2 6 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 5</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Spiritual Principles
					</h6>
					<p class="card-text">
						In considering the spiritual principles intrinsic to Step Three, we will focus first on surrender and willingness...
					</p>
					<a href="{{ route('step.three.section.five') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 2 7 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 6</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Moving On
					</h6>
					<p class="card-text">
						As we get ready to go on to Step Four, we'll want to take a look at what we've gained by working Step Three...
					</p>
					<a href="{{ route('step.three.section.six') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

	</div>
	

@endsection