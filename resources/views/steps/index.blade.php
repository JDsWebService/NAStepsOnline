@extends('layouts.admin')

@section('title', 'Steps Index')

@section('content')

	<div class="row">
		<div class="col-sm-10">
			<h3>Steps Index</h3>
		</div>

		<div class="col-sm-2">
			<a href="{{ route('steps.create') }}" class="btn btn-success btn-block">Create Step</a>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<table class="table table-sm table-hover top-spacing">
				<thead>
					<th class="text-center">Step Number</th>
					<th>Description</th>
					<th></th>
				</thead>

				<tbody>
					@foreach($steps as $step)
						<tr>
							<td class="text-center">{{ $step->number }}</td>
							<td>
								{{ substr(strip_tags(str_replace("&nbsp;", ' ', $step->description)), 0, 100) }}
								{{ strlen(strip_tags(str_replace("&nbsp;", ' ', $step->description))) > 100 ? "..." : "" }}
							</td>
							<td class="text-right">
								{!! Form::open(['route' => ['steps.destroy', $step->id], 'method' => 'DELETE']) !!}
									<a href="{{ route('steps.edit', $step->id) }}" class="btn btn-info btn-sm">Edit</a>

									{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}

								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection