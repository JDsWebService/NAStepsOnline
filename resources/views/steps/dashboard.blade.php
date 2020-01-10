@extends('layouts.main')

@section('title', 'Your Steps Dashboard')

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
		<div class="col-sm-6">
			<h2>Step Work</h2>
		</div>
		<div class="col-sm-6 text-right">
			<a href="{{ route('steps.preface') }}" class="btn btn-sm btn-info">Read The Preface</a>
		</div>
	</div>

	<div class="row justify-content-center">
		<div class="col-sm-3">
			<a href="{{ route('step.one.index') }}">
	    		<div class="card text-center">
					<img class="card-img-top" src="/images/icons/steps.png" alt="Edit Steps">
					<div class="card-body">
						<h5 class="card-title">Step 1</h5>
					</div>
				</div>
			</a>
		</div>

		<div class="col-sm-3">
			<a href="{{ route('step.two.index') }}">
	    		<div class="card text-center">
					<img class="card-img-top" src="/images/icons/notes.png" alt="Edit Step Questions">
					<div class="card-body">
						<h5 class="card-title">Step 2</h5>
					</div>
				</div>
			</a>	
		</div>

		<div class="col-sm-3">
			<a href="{{ route('step.three.index') }}">
	    		<div class="card text-center">
					<img class="card-img-top" src="/images/icons/notes.png" alt="Edit Step Questions">
					<div class="card-body">
						<h5 class="card-title">Step 3</h5>
					</div>
				</div>
			</a>	
		</div>

		<div class="col-sm-3">
			<a href="#">
	    		<div class="card text-center">
					<img class="card-img-top" src="/images/icons/notes.png" alt="Edit Step Questions">
					<div class="card-body">
						<h5 class="card-title">Step 4</h5>
					</div>
				</div>
			</a>	
		</div>

		<div class="col-sm-3">
			<a href="#">
	    		<div class="card text-center">
					<img class="card-img-top" src="/images/icons/notes.png" alt="Edit Step Questions">
					<div class="card-body">
						<h5 class="card-title">Step 5</h5>
					</div>
				</div>
			</a>	
		</div>

		<div class="col-sm-3">
			<a href="#">
	    		<div class="card text-center">
					<img class="card-img-top" src="/images/icons/notes.png" alt="Edit Step Questions">
					<div class="card-body">
						<h5 class="card-title">Step 6</h5>
					</div>
				</div>
			</a>	
		</div>

		<div class="col-sm-3">
			<a href="#">
	    		<div class="card text-center">
					<img class="card-img-top" src="/images/icons/notes.png" alt="Edit Step Questions">
					<div class="card-body">
						<h5 class="card-title">Step 7</h5>
					</div>
				</div>
			</a>	
		</div>

		<div class="col-sm-3">
			<a href="#">
	    		<div class="card text-center">
					<img class="card-img-top" src="/images/icons/notes.png" alt="Edit Step Questions">
					<div class="card-body">
						<h5 class="card-title">Step 8</h5>
					</div>
				</div>
			</a>	
		</div>

		<div class="col-sm-3">
			<a href="#">
	    		<div class="card text-center">
					<img class="card-img-top" src="/images/icons/notes.png" alt="Edit Step Questions">
					<div class="card-body">
						<h5 class="card-title">Step 9</h5>
					</div>
				</div>
			</a>	
		</div>

		<div class="col-sm-3">
			<a href="#">
	    		<div class="card text-center">
					<img class="card-img-top" src="/images/icons/notes.png" alt="Edit Step Questions">
					<div class="card-body">
						<h5 class="card-title">Step 10</h5>
					</div>
				</div>
			</a>	
		</div>

		<div class="col-sm-3">
			<a href="#">
	    		<div class="card text-center">
					<img class="card-img-top" src="/images/icons/notes.png" alt="Edit Step Questions">
					<div class="card-body">
						<h5 class="card-title">Step 11</h5>
					</div>
				</div>
			</a>	
		</div>

		<div class="col-sm-3">
			<a href="#">
	    		<div class="card text-center">
					<img class="card-img-top" src="/images/icons/notes.png" alt="Edit Step Questions">
					<div class="card-body">
						<h5 class="card-title">Step 12</h5>
					</div>
				</div>
			</a>	
		</div>

	</div>

@endsection