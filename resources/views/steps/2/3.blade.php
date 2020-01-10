{{-- Step 2 3 --}}
@extends('layouts.stepsection')

@section('title', 'Step 2 // Part 2')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h4 class="text-muted">Insanity</h4>
		</div>
	</div>

	<p>If we have any doubts about the need for a renewal of sanity in our lives, we're going to have trouble with this step. Reviewing our First Step should help us if we're having doubts. Now is the time to take a good look at our insanity.</p>
	
	<ul>
		<li>Did I believe I could control my using? What were some of my experiences with this, and how were my efforts unsuccessful?</li>
		<li>What things did I do that I can hardly believe I did when I look back at them? Did I put myself in dangerous situations to get drugs? Did I behave in ways of which I'm now ashamed? What were those situations like?</li>
		<li>Did I make insane decisions as a result of my addiction? Did I quit jobs, leave friendships and other relationships, or give up on achieving other goals for no reason other than that those things interfered with my using?</li>
		<li>Did I ever physically injure myself or someone else in my addiction?</li>
	</ul>

	<p>Insanity is a loss of our perspective and our sense of proportion. For example, we may think that our personal problems are more important than anyone else's; in fact, we may not even be able to consider other people's needs at all. Small problems become major catastrophes. Our lives get out of balance. Some obvious examples of insane thinking are the belief that we can stay clean on our own, or the belief that using drugs was our only problem and that everything is fine now just because we're clean. In Narcotics Anonymous, insanity is often described as the belief that we can take something outside ourselves-drugs power, sex, food-to fix what's wrong inside ourselves: our feelings.</p>
	
	<ul>
		<li>How have I overreacted or underreacted to things? How has my life been out of balance?</li>
		<li>In what ways does my insanity tell me that things outside myself can make me whole or solve all my problems? Using drugs? Compulsive gambling, eating, or sex seeking? Something else?</li>
		<li>Is part of my insanity the belief that the symptom of my addiction (using drugs or some other manifestation) is my only problem?</li>
	</ul>

	<p>If we've been clean for a while, we may find that a whole new level of denial is making it difficult to see the insanity in our lives. Just as we did in the beginning of our recovery, we need to become familiar with the ways in which we have been insane. Many of us have found that our understanding of insanity goes further than the definition of insanity in the Basic Text. We make the same mistakes over and over again, even when we're fully aware of what the results will be. Perhaps we're hurting so bad that we don't care about the consequences, or we figure that acting on an obsession will somehow be worth the price.</p>
	
	<ul>
		<li>When we've acted on an obsession, even though we knew what the results would be, what were we feeling and thinking beforehand? What made us go ahead?</li>
	</ul>

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