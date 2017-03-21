@extends('layouts.app')

@section('title')
	New Appointment
@endsection

@section('content')
	@if ( ! $isEdit)
		<form class="form form-horizontal" method="post" action="{{ url('patients') }}">
	@else
		<form class="form form-horizontal" action="{{ url('patients/' . $patient->id) }}" method="post">
			<input type="hidden" name="_method" value="put">
	@endif
		{{ csrf_field() }}

		<div class="box">
			<div class="box-body">
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

			</div>

			<div class="box-footer">
				<button type="submit" class="btn btn-success btn-lg">
					<i class="fa fa-check"></i>
					Save
				</button>

				<a href="{{ url('patients') }}" class="btn btn-default btn-lg">
					<i class="fa fa-times fa-icon"></i>
					Cancel
				</a>
			</div>
		</div>
	</form>

@endsection
