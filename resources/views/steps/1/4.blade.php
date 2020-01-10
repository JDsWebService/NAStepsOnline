{{-- Step 1 4 --}}
@extends('layouts.stepsection')

@section('title', 'Step 1 // Part 3')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h4 class="text-muted">Hitting Bottom - Despair & Isolation</h4>
		</div>
	</div>

	<p>Our addiction finally brings us to a place where we can no longer deny the nature of our problem. All the lies, all the rationalizations, all the illusions fall away as we stand face-to-face with what our lives have become. We realize we've been living without hope. We find we've become friendless or so completely disconnected that our relationships are a sham, a parody of love and intimacy. Though it may seem that all is lost when we find ourselves in this state, the truth is that we must pass through this place before we can embark upon our journey of recovery.</p>

	<ul>
	<li>What crisis brought me to recovery?</li>
	<li>What situation led me to formally work Step One?</li>
	<li>When did I first recognize my addiction as a problem? Did I try to correct it? If so, how? If not, why not?</li>
	</ul>

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