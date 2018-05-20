@extends('layouts.admin')

@section('title', 'Edit Step')

@section('content')

	<div class="row">
		<div class="col-sm-8 offset-sm-2">
			<h2>Edit Step</h2>

			<hr>

			{!! Form::model($step, ['route' => ['steps.update', $step->id], 'method' => 'PUT']) !!}

				{{-- Title --}}
				{{ Form::label('number', 'Number:') }}
				{{ Form::selectRange('number', 1, 12, null, ['class' => 'form-control']) }}

				{{-- Just For Today Main Body --}}
				{{ Form::label('description', 'Description:', ['class' => 'top-spacing']) }}
				{{ Form::textarea('description', null,  ['class' => 'form-control', 'cols' => '30', 'rows' => '10']) }}
				
				<div class="row top-spacing">
					<div class="col-sm-4 offset-sm-4">
						<button value="submit" class="btn btn-primary btn-block">Edit</button>	
					</div>
				</div>

			{{-- Form Close --}}
			{!! Form::close() !!}
		</div>
	</div>

@endsection