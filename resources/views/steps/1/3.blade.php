{{-- Step 1 3 --}}
@extends('layouts.stepsection')

@section('title', 'Step 1 // Part 2')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h4 class="text-muted">Denial</h4>
		</div>
	</div>

	<p>Denial is the part of our disease that tells us we don't have a disease. When we are in denial, we are unable to see the reality of our addiction. We minimize its effect. We blame others, citing the too-high expectations of families, friends, and employers. We compare ourselves with other addicts whose addiction seems "worse" than our own. We may blame one particular drug. If we have been abstinent from drugs for some time, we might compare the current manifestation of our addiction with our drug use, rationalizing that nothing we do today could possibly be as bad as that was! One of the easiest ways to tell that we are in denial is when we find ourselves giving plausible but untrue reasons for our behavior.</p>
	
	<ul>
	<li>Have I given plausible but untrue reasons for my behavior? What have they been?</li>
	<li>Have I compulsively acted on an obsession, and then acted as if I had actually planned to act that way? When were those times?</li>
	<li>How have I blamed other people for my behavior?</li>
	<li>How have I compared my addiction with others' addiction? Is my addiction "bad enough" if I don't compare it to anyone else's?</li>
	<li>Am I comparing a current manifestation of my addiction to the way my life was before I got clean?</li>
	<li>Am I plagued by the idea that I should know better?</li>
	<li>Have I been thinking that I have enough information about addiction and recovery to get my behavior under control before it gets out of hand?</li>
	<li>Am I avoiding action because I'm afraid I will be ashamed when I face the results of my addiction?</li>
	<li>Am I avoiding action because I'm worried about what others will think?</li>
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