@extends('layouts.admin')

@section('title', 'Edit Article')

@section('content')

	<div class="row">
		<div class="col-sm-6 offset-sm-3">
			
			<h3>Edit News Article</h3>

			<hr>

			{!! Form::model($article, ['route' => ['news.update', $article->id], 'method' => 'PUT']) !!}

				{{-- Title --}}
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, ['class' => 'form-control']) }}

				{{-- Just For Today Main Body --}}
				{{ Form::label('body', 'Body:', ['class' => 'top-spacing']) }}
				{{ Form::textarea('body', null,  ['class' => 'form-control', 'cols' => '30', 'rows' => '10']) }}
				
				<div class="row top-spacing">
					<div class="col-sm-4 offset-sm-4">
						<button value="submit" class="btn btn-success btn-block">Save Changes</button>	
					</div>
				</div>

			{{-- Form Close --}}
			{!! Form::close() !!}

		</div>
	</div>

@endsection