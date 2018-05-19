@extends('layouts.admin')

@section('title', 'JFT Index')

@section('content')

	<div class="row">
		<div class="col-sm-10">
			<h3>Just For Today Index</h3>
		</div>

		<div class="col-sm-2">
			<a href="{{ route('jft.create') }}" class="btn btn-success btn-block">Create JFT</a>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<table class="table table-sm table-hover top-spacing">
				<thead>
					<th>ID</th>
					<th>Date</th>
					<th>Title</th>
					<th>JFT Page</th>
					<th></th>
				</thead>

				<tbody>
					@foreach($jft as $reading)
						<tr>
							<td style="width: 10%;">{{ $reading->id }}</td>
							<td style="width: 10%;">{{ date('n / j',  strtotime($reading->date)) }}</td>
							<td style="width: 60%;">{{ $reading->title }}</td>
							<td style="width: 10%;">{{ $reading->jft_page }}</td>
							<td style="width: 10%;" class="text-right">
								{!! Form::open(['route' => ['jft.destroy', $reading->id], 'method' => 'DELETE']) !!}
									<a href="{{ route('jft.edit', $reading->id) }}" class="btn btn-info btn-sm">Edit</a>

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
			{{ $jft->links() }}
		</div>
	</div>

@endsection