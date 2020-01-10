{{-- Step 1 8 --}}
@extends('layouts.stepsection')

@section('title', 'Step 1 // Part 7')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h4 class="text-muted">Surrender</h4>
		</div>
	</div>

	<p>There's a huge difference between resignation and surrender. Resignation is what we feel when we've realized we're addicts but haven't yet accepted recovery as the solution to our problem. Many of us found ourselves at this point long before coming to Narcotics Anonymous. We may have thought that it was our destiny to be addicts, to live and die in our addiction. Surrender, on the other hand, is what happens after we've accepted the First Step as something that is true for us and have accepted that recovery is the solution. We don't want our lives to be the way they have been. We don't want to keep feeling the way we've been feeling.</p>
	
	<ul>
	<li>What am I afraid of about the concept of surrender, if anything? What convinces me that I can't use successfully anymore?</li>
	<li>Do I accept that I'll never regain control, even after a long period of abstinence?</li>
	<li>Can I begin my recovery without a complete surrender?</li>
	<li>What would my life be like if I surrendered completely?</li>
	<li>Can I continue my recovery without complete surrender?</li>
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