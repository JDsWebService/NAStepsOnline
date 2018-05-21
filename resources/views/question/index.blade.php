@extends('layouts.admin')

@section('title', 'Steps Index')

@section('content')

	<div class="row">
		<div class="col-sm-10">
			<h3>Questions Index</h3>
		</div>

		<div class="col-sm-2">
			<a href="{{ route('question.create') }}" class="btn btn-success btn-block">Create Question</a>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<table class="table table-sm table-hover top-spacing">
				<thead>
					<th class="text-center">Step Number</th>
					<th>Question</th>
					<th></th>
				</thead>

				<tbody>
					@foreach($questions as $question)
						<tr>
							<td class="text-center">{{ $question->step->number }}</td>
							<td>
								{{ substr(strip_tags(str_replace("&nbsp;", ' ', $question->question)), 0, 100) }}
								{{ strlen(strip_tags(str_replace("&nbsp;", ' ', $question->question))) > 100 ? "..." : "" }}
							</td>
							<td class="text-right">
								{!! Form::open(['route' => ['question.destroy', $question->id], 'method' => 'DELETE']) !!}
									<a href="{{ route('question.edit', $question->id) }}" class="btn btn-info btn-sm">Edit</a>

									{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}

								{!! Form::close() !!}
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
			{{ $questions->links() }}
		</div>
	</div>

@endsection