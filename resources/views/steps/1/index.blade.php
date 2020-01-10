@extends('layouts.stepsection')

@section('title', 'Step One - Table of Contents')

@section('stylesheets')

	<style type="text/css">
		.section-card {
			height: 100%;
		}
	</style>

@endsection

@section('content')
	
	<div class="row justify-content-center">
		{{-- Step 1 1 --}}
		<div class="col-sm-3 mb-2">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Opening</h5>
					<p class="card-text">
						Hope gives us something positive to look for and move towards. We can admit our need for help as we begin to share in our common welfare.
					</p>
					<a href="{{ route('step.one.opening') }}" class="card-link">Read More...</a>
				</div>
			</div>
		</div>
	</div>

	<div class="row justify-content-center">
	
		{{-- Step 1 2 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 1</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						The Disease of Addiction
					</h6>
					<p class="card-text">
						What makes us addicts is the disease of addiction-not the drugs, not our behavior, but our disease...
					</p>
					<a href="{{ route('step.one.section.one') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 1 3 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 2</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Denial
					</h6>
					<p class="card-text">
						Denial is the part of our disease that tells us we don't have a disease...
					</p>
					<a href="{{ route('step.one.section.two') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 1 4 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 3</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Hitting Bottom - Despair & Isolation
					</h6>
					<p class="card-text">
						Our addiction finally brings us to a place where we can no longer deny the nature of our problem...
					</p>
					<a href="{{ route('step.one.section.three') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 1 5 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 4</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Powerlessness
					</h6>
					<p class="card-text">
						As addicts, we react to the word "powerless" in a variety of ways...
					</p>
					<a href="{{ route('step.one.section.four') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 1 6 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 5</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Unmanageability
					</h6>
					<p class="card-text">
						The First Step asks us to admit two things: one, that we are powerless over our addiction; and two...
					</p>
					<a href="{{ route('step.one.section.five') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 1 7 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 6</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Reservations
					</h6>
					<p class="card-text">
						Reservations are places in our program that we have reserved for relapse...
					</p>
					<a href="{{ route('step.one.section.six') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 1 8 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 7</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Surrender
					</h6>
					<p class="card-text">
						There's a huge difference between resignation and surrender...
					</p>
					<a href="{{ route('step.one.section.seven') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 1 9 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 8</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Spiritual Principles
					</h6>
					<p class="card-text">
						In the First Step, we will focus on honesty, open-mindedness, willingness, humility, and acceptance...
					</p>
					<a href="{{ route('step.one.section.eight') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>

		{{-- Step 1 10 --}}
		<div class="col-sm-3 mb-2">
			<div class="card section-card">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Part 9</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						Moving On
					</h6>
					<p class="card-text">
						As we get ready to go on to Step Two, we'll probably find ourselves wondering if we've worked Step One well enough...
					</p>
					<a href="{{ route('step.one.section.nine') }}" class="btn btn-sm btn-info mt-auto">Work On This</a>
				</div>
			</div>
		</div>


	</div>
	

@endsection