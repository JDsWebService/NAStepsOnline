{{-- Step 1 5 --}}
@extends('layouts.stepsection')

@section('title', 'Step 1 // Part 4')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h4 class="text-muted">Powerlessness</h4>
		</div>
	</div>

	<p>As addicts, we react to the word "powerless" in a variety of ways. Some of us recognize that a more accurate description of our situation simply could not exist, and admit our powerlessness with a sense of relief. Others recoil at the word, connecting it with weakness or believing it to indicate some kind of character deficiency. Understanding powerlessness - and how admitting our own powerlessness is essential to our recovery - will help us get over any negative feelings we may have about the concept. We are powerless when the driving force in our life is beyond our control. Our addiction certainly qualifies as such an uncontrollable, driving force. We cannot moderate or control our drug use or other compulsive behaviors, even when they are causing us to lose the things that matter most to us. We cannot stop, even when to continue will surely result in irreparable physical damage. We find ourselves doing things that we would never do if it weren't for our addiction; things that make us shudder with shame when we think of them. We may even decide that we don't want to use, that we aren't going to use, and realize we are simply unable to stop when the opportunity presents itself.</p>

	<p>We may have tried to abstain from drug use or other compulsive behaviors - perhaps with some success - for a period of time without a program, only to find that our untreated addiction eventually takes us right back to where we were before. In order to work the First Step, we need to prove our own individual powerlessness to ourselves on a deep level.</p>
	
	<ul>
	<li>Over what, exactly, am I powerless?</li>
	<li>I've done things while acting out on my addiction that I would never do when focusing on recovery. What were they?</li>
	<li>What things have I done to maintain my addiction that went completely against all my beliefs and values?</li>
	<li>How does my personality change when I'm acting out on my addiction? (For example: Do I become arrogant? Self-centered? Mean-tempered? Passive to the point where I can't protect myself? Manipulative? Whiny?)</li>
	<li>Do I manipulate other people to maintain my addiction? How?</li>
	<li>Have I tried to quit using and found that I couldn't? Have I quit using on my own and found that my life was so painful without drugs that my abstinence didn't last very long? What were these times like?</li>
	<li>How has my addiction caused me to hurt myself or others?</li>
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