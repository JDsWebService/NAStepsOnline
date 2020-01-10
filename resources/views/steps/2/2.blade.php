{{-- Step 2 2 --}}
@extends('layouts.stepsection')

@section('title', 'Step 2 // Part 1')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h4 class="text-muted">Hope</h4>
		</div>
	</div>

	<p>The hope we get from working Step Two replaces the desperation with which we came into the program. Every time we had followed what we'd thought would be a path out of our addiction - medicine, religion, or psychiatry, for instance - we found they only took us so far; none of these was sufficient for us. As we ran out of options and exhausted our resources, we wondered if we'd ever find a solution to our dilemma, if there were anything in the world that worked. In fact, we may have been slightly suspicious when we first came to Narcotics Anonymous, wondering if this was just another method that wouldn't work, or that wouldn't work well enough for us to make a difference.</p>

	<p>However, something remarkable occurred to us as we sat in our first few meetings. There were other addicts there who had used drugs just as we had, addicts who were now clean. We believed in them. We knew we could trust them. They knew the places we'd been to in our addiction-not just the using hangouts, not just the geographic locations, but the hangouts of horror and despair our spirits had visited each time we'd used. The recovering addicts we met in NA knew those places as well as we did because they had been there themselves.</p>

	<p>It was when we realized that these other members - addicts like ourselves - were staying clean and finding freedom that most of us first experienced the feeling of hope. We may have been standing with a group of members after a meeting. We may have been listening to someone share a story just like our own. Most of us can recall that moment, even years later -and that moment comes to all of us. Our hope is renewed throughout our recovery. Each time something new is revealed to us about our disease, the pain of that realization is accompanied by a surge of hope. No matter how painful the process of demolishing our denial may be, something else is being restored in its place within us. Even if we don't feel like we believe in anything, we do believe in the program. We believe that we can be restored to sanity, even in the most hopeless times, even in our sickest areas.</p>

	<ul>
		<li>What do I have hope about today?</li>
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