@extends('layouts.admin')

@section('title', 'Steps Dashboard')

@section('stylesheets')

	<style type="text/css">
		.card-img-top {
			width: 30%;
			margin: 15px auto;
		}

		.card:hover {
			background-color: #444;
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
		<div class="col-sm-12">
			<h2>Steps Dashboard</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-3 offset-sm-3">
			<a href="{{ route('steps.index') }}">
	    		<div class="card text-center">
					<img class="card-img-top" src="/images/admin/steps.png" alt="Edit Steps">
					<div class="card-body">
						<h5 class="card-title">Edit Steps</h5>
					</div>
				</div>
			</a>
		</div>

		<div class="col-sm-3">
			<a href="#">
	    		<div class="card text-center">
					<img class="card-img-top" src="/images/admin/question.png" alt="Edit Step Questions">
					<div class="card-body">
						<h5 class="card-title">Edit Questions</h5>
					</div>
				</div>
			</a>	
		</div>

	</div>

@endsection