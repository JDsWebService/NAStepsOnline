{{-- Step 1 2 --}}
@extends('layouts.stepsection')

@section('title', 'Step 1 // Part 1')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h4 class="text-muted">The Disease of Addiction</h4>
		</div>
	</div>
	<p>What makes us addicts is the disease of addiction-not the drugs, not our behavior, but our disease. There is something within us that makes us unable to control our use of drugs. This same "something" also makes us prone to obsession and compulsion in other areas of our lives. How can we tell when our disease is active? When we become trapped in obsessive, compulsive, self-centered routines, endless loops that lead nowhere but to physical, mental, spiritual, and emotional decay.</p>
	
	<ul>
	<li>What does "the disease of addiction" mean to me?</li>
	<li>Has my disease been active recently? In what way?</li>
	<li>What is it like when I'm obsessed with something? Does my thinking follow a pattern? Describe.</li>
	<li>When a thought occurs to me, do I immediately act on it without considering the consequences? In what other ways do I behave compulsively?</li>
	<li>How does the self-centered part of my disease affect my life and the lives of those around me?</li>
	<li>How has my disease affected me physically? Mentally? Spiritually? Emotionally?</li>
	</ul>

	<p>Our addiction can manifest itself in a variety of ways. When we first come to Narcotics Anonymous, our problem will, of course, be drugs. Later on, we may find out that addiction is wreaking havoc in our lives in any number of ways.</p>
	
	<ul>
	<li>What is the specific way in which my addiction has been manifesting itself most recently?</li>
	<li>Have I been obsessed with a person, place, or thing? If so, how has that gotten in the way of my relationships with others?</li>
	<li>How else have I been affected mentally, physically, spiritually, and emotionally by this obsession?</li>
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