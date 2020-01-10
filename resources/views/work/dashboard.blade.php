@extends('layouts.main')

@section('title', 'Your Work Dashboard')

@section('stylesheets')

	<style type="text/css">
		.card-img-top {
			width: 30%;
			margin: 15px auto;
		}

		.card:hover {
			background-color: #ccc;
			color: #333;
		}

		.card {
			margin-top: 15px;
		}

		.col-sm-3 a, .col-sm-3 a:hover {
			color: #ccc;
			text-decoration: none;
		}
	</style>
	
@endsection

@section('content')

	<div class="row">
		<div class="col-sm-6 offset-sm-3">
			<h2>Your Work</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-3 offset-sm-3">
			<a href="{{ route('steps.dashboard') }}">
	    		<div class="card text-center">
					<img class="card-img-top" src="/images/icons/steps.png" alt="Edit Steps">
					<div class="card-body">
						<h5 class="card-title">Your Steps</h5>
					</div>
				</div>
			</a>
		</div>

		<div class="col-sm-3">
			<a href="#">
	    		<div class="card text-center">
					<img class="card-img-top" src="/images/icons/notes.png" alt="Edit Step Questions">
					<div class="card-body">
						<h5 class="card-title">Your Notes</h5>
					</div>
				</div>
			</a>	
		</div>

	</div>

@endsection