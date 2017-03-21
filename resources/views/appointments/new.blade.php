@extends('layouts.app')

@section('title')
	New Appointment
@endsection

@section('content')
	<div class="container">
		@if ( ! $isEdit)
			<form class="form" method="post" action="{{ url('appointments') }}">
		@else
			<form class="form" action="{{ url('appointments/' . $patient->id) }}" method="post">
				<input type="hidden" name="_method" value="put">
		@endif
			{{ csrf_field() }}

			<div class="box">
				<div class="box-header">
					@yield('title')
				</div>
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

					<div class="form-group">
						<label for="patient_id" class="control-label">Patient</label>
						<select name="patient_id" id="patient_id" class="form-control selectize-single">
							@foreach (Patient::orderBy('name', 'asc')->get() as $patient)
								<option value="{{ $patient->id }}">{{ $patient->name }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="doctor_id" class="control-label">Doctor</label>
						<select name="doctor_id" id="doctor_id" class="form-control selectize-single">
							@foreach (User::all() as $doctor)
								<option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="clinic_id" class="control-label">Clinic</label>
						<select name="clinic_id" id="clinic_id" class="form-control selectize-single">
							@foreach (Clinic::all() as $clinic)
								<option value="{{ $clinic->id }}">{{ $clinic->name }}</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="box-footer">
					<button type="submit" class="btn btn-success btn-lg">
						<i class="fa fa-check"></i>
						Save
					</button>

					<a href="{{ url('appointments') }}" class="btn btn-default btn-lg">
						<i class="fa fa-times fa-icon"></i>
						Cancel
					</a>
				</div>
			</div>
		</form>
	</div>
@endsection
