@extends('layouts.main')

@section('title', 'News')

@section('content')

	<div class="row">
		<div class="col-sm-8">
			<h2>Site News</h2>
			<hr>
			
			@foreach($news as $article)
				<h4>{{ $article->title }}</h4>
				<small>{{ date('M j, Y @ H:i', strtotime($article->created_at)) }}</small>
				<p>
					{{ substr(strip_tags($article->body), 0, 300) }}
					{{ strlen(strip_tags($article->body)) > 300 ? "..." : "" }}
				</p>
				<a href="{{ route('news.show', $article->id) }}" class="btn btn-info btn-sm">Read More</a>
				@if(!$loop->last)
					<hr>
				@endif
			@endforeach

			<hr>
			<div class="row">
				<div class="col-sm-12">
					{{-- Pagination Links --}}
					{{ $news->links() }}
				</div>
			</div>
		</div>

		<div class="col-sm-4 text-right">
			<h5>Popular Articles</h5>
		</div>
	</div>

	

@endsection