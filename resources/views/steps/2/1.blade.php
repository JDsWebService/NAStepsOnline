{{-- Step 2 1 --}}
@extends('layouts.stepsection')

@section('title', 'Step 2 // Opening')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<p class="lead">
				"We came to believe that a Power greater than ourselves could restore us to sanity."
			</p>
		</div>
	</div>

	<p>Step One strips us of our illusions about addiction; Step Two gives us hope for recovery. The Second Step tells us that what we found out about our addiction in the First Step is not the end of the story. The pain and insanity with which we have been living are unnecessary, says Step Two. They can be relieved and, in time, we will learn to live without them through working the Twelve Steps of Narcotics Anonymous.</p>

	<p>The Second Step fills the void we feel when we've finished Step One. As we approach Step Two, we begin to consider that maybe, just maybe, there's a Power greater than ourselves-a Power capable of healing our hurt, calming our confusion, and restoring our sanity.</p>

	<p>When we were new in the program, many of us were puzzled by this step's implication that we had been insane. From acknowledging our powerlessness to admitting our "insanity" seemed an awfully large leap. However, after being around the program for a while, we began to understand what this step was really about. We read the Basic Text and found that our insanity was defined there as "repeating the same mistakes and expecting different results." We could certainly relate to that! After all, how many times had we tried to get away with something we had never gotten away with before, each time telling ourselves, "It will be different this time." Now, that's insane! As we live the principles of this step for many years, we discover how deep our insanity actually runs; we often find that the Basic Text definition just scratches the surface.</p>

	<p>Some of us resisted this step because we thought it required us to be religious. Nothing could be further from the truth. There is nothing, absolutely nothing, in the NA program that requires a member to be religious. The idea that "anyone may join us, regardless of... religion or lack of religion" is fiercely defended by our fellowship. Our members strive to be inclusive in this regard and do not tolerate anything that compromises the unconditional right of all addicts to develop their own individual understanding of a Power greater than themselves. This is a spiritual, not religious, program.</p>

	<p>The beauty of the Second Step is revealed when we begin to think about what our Higher Power can be. We are encouraged to choose a Power that is loving, caring, and-most importantly - able to restore us to sanity. The Second Step does not say, "We came to believe in a Power greater than ourselves." It says, "We came to believe that a Power greater than ourselves could restore us to sanity." The emphasis is not on who or what this Power is, but on what this Power can do for us. The group itself certainly qualifies as a Power greater than ourselves. So do the spiritual principles contained in the Twelve Steps. And, of course, so does the understanding any one of our individual members has of a Higher Power. As we stay clean and continue to work this step, we discover that no matter how long our addiction has gone on and how far our insanity has progressed, there's no limit to the ability of a Power greater than ourselves to restore our sanity.</p>

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