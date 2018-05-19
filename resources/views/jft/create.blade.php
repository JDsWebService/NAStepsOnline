@extends('layouts.admin')

@section('title', 'Create JFT Reading')

@section('content')

	<div class="row">
		<div class="col-sm-6 offset-sm-3">
			
			<h3>Create Just For Today Reading</h3>

			<form action="{{ route('jft.store') }}" method="post">
				@csrf

				{{-- Title --}}
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, ['class' => 'form-control']) }}

				{{-- Just For Today Page --}}
				{{ Form::label('jft_page', 'Just For Today Page:', ['class' => 'top-spacing']) }}
				{{ Form::number('jft_page', null, ['class' => 'form-control']) }}
				
				{{-- Date --}}
				<div class="row">
					<div class="col-sm-6 top-spacing">
						{{ Form::label('month', 'Monday:') }}
						{{ Form::selectRange('month', 1, 12, null, ['class' => 'form-control']) }}
					</div>
					<div class="col-sm-6 top-spacing">
						{{ Form::label('day', 'Day:') }}
						{{ Form::selectRange('day', 1, 31, null, ['class' => 'form-control']) }}
					</div>
				</div>

				{{-- Basic Text Quote --}}
				{{ Form::label('bt_quote', 'Basic text Quote:', ['class' => 'top-spacing']) }}
				{{ Form::textarea('bt_quote', null,  ['class' => 'form-control', 'cols' => '30', 'rows' => '5']) }}
				
				{{-- Basic Text Page --}}
				{{ Form::label('bt_page', 'Basic Text Page:', ['class' => 'top-spacing']) }}
				{{ Form::number('bt_page', null, ['class' => 'form-control']) }}

				{{-- Just For Today Main Body --}}
				{{ Form::label('body', 'Just For Today Body:', ['class' => 'top-spacing']) }}
				{{ Form::textarea('body', null,  ['class' => 'form-control', 'cols' => '30', 'rows' => '10']) }}

				{{-- Just For Today End Quote --}}
				{{ Form::label('jft_end', 'Just For Today End Quote:', ['class' => 'top-spacing']) }}
				{{ Form::textarea('jft_end', null,  ['class' => 'form-control', 'cols' => '30', 'rows' => '5']) }}
				
				<div class="row top-spacing">
					<div class="col-sm-4 offset-sm-4">
						<button value="submit" class="btn btn-success btn-block">Create</button>	
					</div>
				</div>

			</form>
		</div>
	</div>

@endsection