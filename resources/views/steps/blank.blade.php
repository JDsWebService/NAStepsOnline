{{-- Step 3 2 --}}
@extends('layouts.stepsection')

@section('title', 'Step 3 // SECTION_NUMBER')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h4 class="text-muted">Section_Title</h4>
		</div>
	</div>

	

	<div class="row justify-content-center">
		<div class="col-sm-3">
			<a href="#" class="btn btn-block btn-warning">< Go Back</a>
		</div>
		<div class="col-sm-3">
			<a href="{{ route('step.three.index') }}" class="btn btn-block btn-info">Table of Contents</a>
		</div>
		<div class="col-sm-3">
			<a href="#" class="btn btn-block btn-success">Continue ></a>
		</div>
	</div>

@endsection