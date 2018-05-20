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
					{{ substr(strip_tags(str_replace("&nbsp;", ' ', $article->body)), 0, 300) }}
					{{ strlen(strip_tags(str_replace("&nbsp;", ' ', $article->body))) > 300 ? "..." : "" }}
				</p>
				<a href="{{ route('news.show', $article->slug) }}" class="btn btn-primary btn-sm">Read More ></a>
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
			<h2><small>Popular Articles</small></h2>
			<hr>
			@foreach($popular as $article)
				<a href="{{ route('news.show', $article->slug) }}">{{ $article->title }}</a>
				<br>
			@endforeach
		</div>
	</div>

	

@endsection