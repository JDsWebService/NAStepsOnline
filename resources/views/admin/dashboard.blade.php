@extends('layouts.admin')

@section('title', 'Dashboard')

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
            <h3>Administrator Dashboard</h3>
        </div>
    </div>

    <div class="row justify-content-center">

    	<div class="col-sm-3">
    		<a href="#">
	    		<div class="card text-center">
					<img class="card-img-top" src="images/admin/steps.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Steps</h5>
					</div>
				</div>
			</a>
    	</div>

    	<div class="col-sm-3">
    		<a href="#">
	    		<div class="card text-center">
					<img class="card-img-top" src="images/admin/users.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Users</h5>
					</div>
				</div>
			</a>
    	</div>

    	<div class="col-sm-3">
    		<a href="{{ route('news.admin.index') }}">
	    		<div class="card text-center">
					<img class="card-img-top" src="images/admin/news.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">News</h5>
					</div>
				</div>
			</a>
    	</div>

    	<div class="col-sm-3">
    		<a href="{{ route('jft.index') }}">
	    		<div class="card text-center">
					<img class="card-img-top" src="images/admin/jft.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Just For Today</h5>
					</div>
				</div>
			</a>
    	</div>

    </div>

    <hr>

    <div class="row">
        <div class="col-sm-12">
            <h3>Statistics</h3>
        </div>
    </div>

    


@endsection
