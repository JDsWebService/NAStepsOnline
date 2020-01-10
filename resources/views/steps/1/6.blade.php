{{-- Step 1 6 --}}
@extends('layouts.stepsection')

@section('title', 'Step 1 // Part 5')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h4 class="text-muted">Unmanageability</h4>
		</div>
	</div>

	<p>The First Step asks us to admit two things: one, that we are powerless over our addiction; and two, that our lives have become unmanageable. Actually, we would be hard pressed to admit one and not the other. Our unmanageability is the outward evidence of our powerlessness. There are two general types of unmanageability: outward unmanageability, the kind that can be seen by others; and inner, or personal, unmanageability.</p>

	<p>Outward unmanageability is often identified by such things as arrests, job losses, and family problems. Some of our members have been incarcerated. Some have never been able to sustain any kind of relationship for more than a few months. Some of us have been cut off from our families,asked never again to contact them.</p>

	<p>Inner or personal unmanageability is often identified by unhealthy or untrue belief Systems about ourselves, the world we live in, and the people in our lives. We may believe we're worthless. We may believe that the world revolves around us -not just that it should, but that it does. We may believe that it isn't really our job to take care of ourselves; someone else should do that. We may believe that the responsibilities the average person takes on as a matter of course are just too large a burden for us to bear. We may over or under react to events in our lives. Emotional volatility is often one of the most obvious ways in which we can identify personal unmanageability.</p>
	
	<ul>
	<li>What does unmanageability mean to me?</li>
	<li>Have I ever been arrested or had legal trouble as a result of my addiction? Have I ever done anything I could have been arrested for if only I was caught? What have those things been?</li>
	<li>What trouble have I had at work or school because of my addiction? What trouble have I had with my family as a result of my addiction?</li>
	<li>What trouble have I had with my friends as a result of my addiction?</li>
	<li>Do I insist on having my own way? What effect has my insistence had on my relationships?</li>
	<li>Do I consider the needs of others? What effect has my lack of consideration had on my relationships?</li>
	<li>Do I accept responsibility for my life and my actions? Am I able to carry out my daily responsibilities without becoming overwhelmed? How has this affected my life?</li>
	<li>Do I fall apart the minute things don't go according to plan? How has this affected my life?</li>
	<li>Do I treat every challenge as a personal insult? How has this affected my life?</li>
	<li>Do I maintain a crisis mentality, responding to every situation with panic? How has this affected my life?</li>
	<li>Do I ignore signs that something may be seriously wrong with my health or with my children, thinking things will work out somehow? Describe.</li>
	<li>When in real danger, have I ever been either indifferent to that danger or somehow unable to protect myself as a result of my addiction? Describe.</li>
	<li>Have I ever harmed someone as a result of my addiction? Describe.</li>
	<li>Do I have temper tantrums or react to my feelings in other ways that lower my self-respect or sense of dignity? Describe.</li>
	<li>Did I take drugs or act out on my addiction to change or suppress my feelings? What was I trying to change or suppress?</li>
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