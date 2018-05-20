@extends('layouts.admin')

@section('title', 'Create News Article')

@section('content')

	<div class="row">
		<div class="col-sm-6 offset-sm-3">
			
			<h3>Create News Article</h3>

			<hr>

			<form action="{{ route('news.store') }}" method="post">
				@csrf

				{{-- Title --}}
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, ['class' => 'form-control']) }}

				{{-- Just For Today Main Body --}}
				{{ Form::label('body', 'Body:', ['class' => 'top-spacing']) }}
				{{ Form::textarea('body', null,  ['class' => 'form-control', 'cols' => '30', 'rows' => '10']) }}
				
				<div class="row top-spacing">
					<div class="col-sm-4 offset-sm-4">
						<button value="submit" class="btn btn-success btn-block">Create</button>	
					</div>
				</div>

			</form>
		</div>
	</div>

@endsection