{{-- Step 2 8 --}}
@extends('layouts.stepsection')

@section('title', 'Step 2 // Part 7')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h4 class="text-muted">Moving On</h4>
		</div>
	</div>

	<p>As we get ready to go on to Step Three, we'll want to take a look at what we've gained by working Step Two. Writing about our understanding of each step as we prepare to move on helps us internalize the spiritual principles connected to it.</p>

	<ul>
		<li>What action can I take that will help me along in the process of coming to believe?</li>
		<li>What am I doing to work on overcoming any unrealistic expectations I may have about being restored to sanity?</li>
		<li>What is my understanding of Step Two?</li>
		<li>How has my prior knowledge and experience affected my work on this step?</li>
	</ul>

	<p>As we move on to Step Three, a sense of hope is probably arising within our spirits. Even if we're not new in recovery, we've just reinforced our knowledge that recovery, growth, and change are not just possible but inevitable when we make the effort to work the steps. We can see the possibility of relief from the particular brand of insanity in which we've most recently been gripped by our addiction. We've probably already begun to experience some freedom. We're beginning to be released from the blind pursuit of our insanity. We've explored our insanity and have started to trust a Power greater than ourselves to relieve us from having to continue on the same path. We're beginning to be freed from our illusions. We no longer have to struggle to keep our addiction a secret or isolate ourselves to hide our insanity. We have seen how the program has worked for others, and we have discovered that it is beginning to work for us as well. Through our newfound faith, we achieve the willingness to move into action and work Step Three.</p>

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