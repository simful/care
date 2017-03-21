@extends('layouts.app')

@section('title')
	Appointment List
@endsection

@section('content')
	<div class="container">

		<div class="mbot20">
			<a href="{{ url('appointments/create') }}" class="btn btn-primary btn-lg">
				<i class="fa fa-plus fa-btn"></i>New Appointment
			</a>
		</div>

		<div class="row">
			<div class="col-md-8">
				<div class="box">
					<div class="box-header">
						On-site Patients ({{ count($appointments) }})
					</div>
					<div class="box-body">
						@foreach ($appointments as $appointment)
							<div class="media">
								<div class="media-left" style="font-size: 32px; color: #999">
									<img class="media-object hide" src="{{ $appointment->patient->avatar }}" alt="{{ $appointment->patient->name }}" style="height: 64px; width: 64px">
								</div>
								<div class="media-body">
									<span class="pull-right">
										<span class="label label-info pull-right">{{ $appointment->status }}</span>&nbsp;
										<span class="label label-info pull-right">{{ $appointment->clinic->name }}</span>
									</span>
									<h4 class="media-heading">{{ $appointment->patient->name }}</h4>
									<p>{{ $appointment->patient->gender }}, {{ age($appointment->patient->birth_date) }} years old<br>
										{{ $appointment->patient->city }}</p>
									<a href="{{ url("appointments/$appointment->id") }}" class="btn btn-default">
										<i class="fa fa-eye"></i>
										View Appointment
									</a>
									<a href="{{ url("patients/".$appointment->patient->id) }}" class="btn btn-default">
										<i class="fa fa-user"></i>
										View Patient
									</a>
								</div>
							</div>
							<hr>
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box">
					<div class="box-header">
						Clinic Status
					</div>
					<div class="box-body">
						@foreach (Clinic::all() as $clinic)
							<div>
								<h4>
									<a href="{{ url('queue/'.$clinic->id) }}">
										{{ $clinic->name }} ({{ $clinic->appointments()->count() }})
									</a>
								</h4>
								<p>{{ $clinic->doctor ? $clinic->doctor->name : 'Vacant' }}</p>
								<p>{{ $clinic->patient ? $clinic->patient->name : 'Idle' }}</p>
							</div>
							<hr>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
