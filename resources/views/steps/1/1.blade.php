{{-- Step 1 1 --}}
@extends('layouts.stepsection')

@section('title', 'Step One // Opening')

@section('content')

	<div class="row">
		<div class="col-sm-12">
			<p class="lead">
				"We admitted we were powerless over our addiction, that our lives had become unmanageable."
			</p>
		</div>
	</div>

	<p>Hope gives us something positive to look for and move towards. We can admit our need for help as we begin to share in our common welfare.</p>

	<p>A "first" of anything is a beginning, and so it is with the steps: The First Step is the beginning of the recovery process. The healing starts here; we can't go any further until we've worked this step. Some NA members "feel" their way through the First Step by intuition; others choose to work Step One in a more systematic fashion. Our reasons for formally working Step One will vary from member to member. It may be that we're new to recovery, and we've just fought-and lost-an exhausting battle with drugs. It may be that we've been around awhile, abstinent from drugs, but we've discovered that our disease has become active in some other area of our lives, forcing us to face our powerlessness and the unmanageability of our lives once again. Not every act of growth is motivated by pain; it may just be time to cycle through the steps again thus beginning the next stage of our never-ending journey of recovery.</p>

	<p>Some of us find a measure of comfort in realizing that a disease, not a moral failing, has caused us to reach this bottom. Others don't really care what the cause has been-we just want out! Whatever the case, it's time to do some step work: to engage in some concrete activity that will help us find more freedom from our addiction, whatever shape it is currently taking. Our hope is to internalize the principles of Step One, to deepen our surrender, to make the principles of acceptance, humility, willingness, honesty, and open-mindedness a fundamental part of who we are.</p>

	<p>First, we must arrive at a point of surrender. There are many different ways to do this. For some of us, the road we traveled getting to the First Step was more than enough to convince us that unconditional surrender was our only option. Others start this process even though we're not entirely convinced that we're addicts or that we've really hit bottom. Only in working the First Step do we truly come to realize that we are addicts, that we have hit bottom, and that we must surrender.</p>

	<p>Before we begin working the First Step, we must become abstinent-whatever it takes. If we're new in Narcotics Anonymous and our First Step is primarily about looking at the effects of drug addiction in our lives, we need to get clean. If we've been clean awhile and our First Step is about our powerlessness over some other behavior that's made our lives unmanageable, we need to find a way to stop the behavior so that our surrender isn't clouded by continued acting out.</p>

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