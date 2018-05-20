@extends('layouts.main')

@section('title', $article->title)

@section('content')

	<div class="row">
		<div class="col-sm-8 offset-sm-2">
			<h3>{{ $article->title }}</h3>
			<small>Published On: {{ date('M j, Y @ H:i', strtotime($article->created_at)) }}</small>
			<hr>
			<p>
				{!! $article->body !!}
			</p>
		</div>
	</div>

@endsection