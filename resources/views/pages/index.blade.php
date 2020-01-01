@extends('layouts.main')

@section('title', 'Home')

@section('stylesheets')

	<style type="text/css">
		/* Logo */
		.main-image {
			margin-top: 2vh;
		}
		
		/* H1 tag for title*/
		.title {
			margin-top: 5vh;
		}

		/* Icons */
		.index-icon {
			width: 50%;
		}
	</style>

@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-12 text-center">
			<img src="images/home_header.png" alt="Header Banner" class="main-image">
			<h1 class="title">NA Steps Online</h1>
			<p class="lead">Making NA Steps Easily Accessible For The Modern Era</p>
		</div>
	</div>

	<hr>

	<div class="row text-center">
		
		<div class="col-sm-4">
			<img src="images/icons/connection.png" alt="text" class="index-icon">

			<h4 class="title">Sponsor Connection</h4>
			<p class="lead">We make connecting and sharing with your sponsor as easy as one click. Email updates can automatically be sent to your sponsor. All settings are configurable and tailored to you!</p>
		</div>
		
		<div class="col-sm-4">
			<img src="images/icons/lock.png" alt="text" class="index-icon">

			<h4 class="title">Secure Encryption</h4>
			<p class="lead">To make sure anonymity is preserved, we store all step work, notes, and other data with high level encryption at all times. Your information will <strong>never</strong> be shared with anyone <strong>ever</strong>.</p>
		</div>
		
		<div class="col-sm-4">
			<img src="images/icons/steps_home.png" alt="text" class="index-icon">

			<h4 class="title">Comprehensive Steps</h4>
			<p class="lead">We have a database of comphrensive step working questions to help guide you through the steps. You will also be granted access to a special notes section to write down your thoughts and insights while working on the steps.</p>
		</div>

	</div>

	<div class="row">
		<div class="col-sm-6 offset-sm-3">
			<a href="{{ route('register') }}" class="btn btn-success btn-block">
				Sign Up FREE Today!
			</a>
		</div>
	</div>

@endsection