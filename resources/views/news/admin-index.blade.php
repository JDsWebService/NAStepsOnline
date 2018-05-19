@extends('layouts.admin')

@section('title', 'News Index')

@section('content')

	<div class="row">
		<div class="col-sm-10">
			<h3>News Index</h3>
		</div>

		<div class="col-sm-2">
			<a href="{{ route('news.create') }}" class="btn btn-success btn-block">Create News Article</a>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<table class="table table-sm table-hover top-spacing">
				<thead>
					<th>ID</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created On</th>
					<th></th>
				</thead>

				<tbody>
					@foreach($news as $article)
						<tr>
							<td>{{ $article->id }}</td>
							<td>{{ $article->title }}</td>
							<td>
								{{ substr(strip_tags($article->body), 0, 50) }}
								{{ strlen(strip_tags($article->body)) > 50 ? "..." : "" }}
							</td>
							<td>{{ date('M j, Y @ H:i', strtotime($article->created_at)) }}</td>
							<td>
								<a href="{{ route('news.show', $article->id) }}" class="btn btn-default btn-sm">View</a>
								<a href="{{ route('news.edit', $article->id) }}" class="btn btn-primary btn-sm">Edit</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<div class="row ">
		<div class="col-sm-12">
			{{-- Pagination Links --}}
			{{ $news->links() }}
		</div>
	</div>

@endsection