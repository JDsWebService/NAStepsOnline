{{-- Step 1 7 --}}
@extends('layouts.stepsection')

@section('title', 'Step 1 // Part 6')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h4 class="text-muted">Reservations</h4>
		</div>
	</div>

	<p>Reservations are places in our program that we have reserved for relapse. They may be built around the idea that we can retain a small measure of control, something like, "Okay, I accept that I can't control my using, but I can still sell drugs, can't I?" Or we may think we can remain friends with the people we used with or bought drugs from. We may think that certain parts of the program don't apply to us. We may think there's something we just can't face clean-a serious illness, for instance, or the death of a loved one - and plan to use if it ever happens. We may think that after we've accomplished some goal, made a certain amount of money, or been clean for a certain number of years, then we'll be able to control our using. Reservations are usually tucked away in the back of our minds; we are not fully conscious of them. It is essential that we expose any reservations we may have and cancel them, right here, right now.</p>

	<ul>
	<li>Have I accepted the full measure of my disease?</li>
	<li>Do I think I can still associate with the people connected with my addiction? Can I still go to the places where I used? Do I think it's wise to keep drugs or paraphernalia around, just to "remind myself" or test my recovery? If so, why?</li>
	<li>Is there something I think I can't get through clean, some event that might happen that will be so painful that I'll have to use to survive the hurt?</li>
	<li>Do I think that with some amount of clean time, or with different life circumstances, I'd be able to control my using?</li>
	<li>What reservations am I still holding on to?</li>
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