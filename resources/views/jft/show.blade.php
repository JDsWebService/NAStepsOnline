@extends('layouts.main')

@section('title', 'Just For Today')

@section('stylesheets')

	<style type="text/css">
		.title-spacing {
			margin-top: 5vh;
		}
	</style>
	
@endsection

@section('content')
	
	<div class="row">
		<div class="col-sm-5 offset-sm-2">
			<h3>Just For Today <small>p. 143</small></h3>
		</div>
		<div class="col-sm-3">
			<h3>May 16th, 2018</h3>
		</div>
	</div>

	{{-- Just for Today Title --}}
	<div class="row">
		<div class="col-sm-8 offset-sm-2 text-center title-spacing">
			<h2>Just For Today Title</h2>
		</div>
	</div>
	
	{{-- Basic Text --}}
	<div class="row">
		<div class="col-sm-8 offset-sm-2 text-center">
			<p class="lead font-italic">
				"This is going to be the Basic Text Quote that goes here."
			</p>
			<p>
				Basic Text ~ p. 86
			</p>
		</div>
	</div>

	{{-- Just For Today Body --}}
	<div class="row">
		<div class="col-sm-8 offset-sm-2 text-justify">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis veritatis quisquam unde, exercitationem perferendis fuga inventore minus dolores delectus corrupti explicabo amet porro vitae mollitia laudantium necessitatibus, aut commodi maxime.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aspernatur, pariatur. Neque non possimus, doloribus sed, soluta commodi mollitia placeat magnam, amet ad inventore eveniet. Id, assumenda repellat magni rem.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias expedita beatae esse incidunt nisi tempora nesciunt voluptatem suscipit accusamus iste culpa illum iusto dolorum voluptatibus dignissimos, fugiat, maxime porro dolores?
			</p>

			<hr>
		</div>
	</div>
	
	{{-- Just For Today End Quote --}}
	<div class="row">
		<div class="col-sm-8 offset-sm-2 text-justify">
			<p>
				<strong>Just For Today: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos soluta cupiditate pariatur iure reiciendis ducimus doloremque nobis ex adipisci odio. Voluptatem magnam, fugit doloremque numquam? Enim eligendi a, debitis adipisci.
			</p>
		</div>
	</div>
@endsection