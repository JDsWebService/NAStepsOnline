@extends('layouts.admin')

@section('title', 'Create Question')

@section('content')

	<div class="row">
		<div class="col-sm-8 offset-sm-2">
			<h2>Create Question</h2>

			<hr>

			<form action="{{ route('question.store') }}" method="post">
				@csrf

				{{-- Step Number --}}
				{{ Form::label('step_id', 'Step Number:') }}
				{{ Form::select('step_id', $steps, null, ['class' => 'form-control']) }}

				{{-- Question --}}
				{{ Form::label('question', 'Question:', ['class' => 'top-spacing']) }}
				{{ Form::textarea('question', null,  ['class' => 'form-control', 'cols' => '30', 'rows' => '10']) }}
				
				<div class="row top-spacing">
					<div class="col-sm-4 offset-sm-4">
						<button value="submit" class="btn btn-success btn-block">Create</button>	
					</div>
				</div>

			</form>
		</div>
	</div>

@endsection