@extends('layouts.admin')

@section('title', 'Edit Step')

@section('content')

	<div class="row">
		<div class="col-sm-8 offset-sm-2">
			<h2>Edit Question</h2>

			<hr>

			{!! Form::model($question, ['route' => ['question.update', $question->id], 'method' => 'PUT']) !!}

				{{-- Step Number --}}
				{{ Form::label('step_id', 'Step Number:') }}
				{{ Form::select('step_id', $steps, null, ['class' => 'form-control']) }}

				{{-- Question --}}
				{{ Form::label('question', 'Question:', ['class' => 'top-spacing']) }}
				{{ Form::textarea('question', null,  ['class' => 'form-control', 'cols' => '30', 'rows' => '10']) }}
				
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