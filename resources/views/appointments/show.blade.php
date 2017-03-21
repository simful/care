@extends('layouts.app')

@section('title')
	Appointment #{{ $appointment->id }} - {{ $appointment->patient->name }}
@endsection

@section('content')
	<div class="container">
		<a href="{{ url('appointments') }}" class="btn btn-primary mbot20">
			<i class="fa fa-arrow-left fa-icon"></i>
			Back to Appointments
		</a>

		<div class="row">
			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						@yield('title')
					</div>

					<div class="box-body">
						<div class="form-group">
							<label class="control-label">Doctor</label>
							<p class="form-control-static">{{ $appointment->doctor->name }}
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box">
					<div class="box-header">Billing</div>
					<div class="box-body">
						<div class="form-group">
							<label class="control-label">Payment Status</label>
							<p class="form-control-static">Paid</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		@include('appointments.form-nurse')
		@include('appointments.form-assessment')
		@include('appointments.form-prescription')
		@include('appointments.form-billing')


	</div>
@endsection
