@extends('layouts.main')

@section('title', '403 - Not Authorized')

@section('stylesheets')

	<style type="text/css">
		.unauthorized-img {
			margin-bottom: 5vh;
		}
	</style>

@endsection

@section('content')

	<div class="row">
		<div class="col-sm-12 text-center">
			<img src="/images/icons/danger.png" alt="Not Authorized" class="unauthorized-img">
			<h1>Unauthorized</h1>
			<p class="lead">You are unauthorized to view this page.</p>
		</div>
	</div>

@endsection