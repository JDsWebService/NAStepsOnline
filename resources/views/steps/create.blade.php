@extends('layouts.admin')

@section('title', 'Create Step')

@section('content')

	<div class="row">
		<div class="col-sm-8 offset-sm-2">
			<h2>Create Step</h2>

			<hr>

			<form action="{{ route('steps.store') }}" method="post">
				@csrf

				{{-- Step Number --}}
				{{ Form::label('number', 'Number:') }}
				{{ Form::selectRange('number', 1, 12, null, ['class' => 'form-control']) }}

				{{-- Step Description --}}
				{{ Form::label('description', 'Description:', ['class' => 'top-spacing']) }}
				{{ Form::textarea('description', null,  ['class' => 'form-control', 'cols' => '30', 'rows' => '10']) }}
				
				<div class="row top-spacing">
					<div class="col-sm-4 offset-sm-4">
						<button value="submit" class="btn btn-success btn-block">Create</button>	
					</div>
				</div>

			</form>
		</div>
	</div>

@endsection