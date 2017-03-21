@extends('layouts.app')

@section('title')
	Queues
@endsection

@section('content')
	<div class="container">

		<div class="row">
			<div class="col-md-4">
				<div class="box">
					<div class="box-header">
						{{ $clinic->name }}
					</div>
					<div class="box-body">
						@if ($clinic->doctor)
							<h3>Doctor</h3>
							<a href="{{ url('doctors/'.$clinic->doctor->id) }}">
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="{{ $clinic->doctor->avatar }}" alt="{{ $clinic->doctor->name }}" style="height: 64px; width: 64px">
									</div>
									<div class="media-body">
										<h4 class="media-heading">{{ $clinic->doctor->name }}</h4>

									</div>
								</div>
							</a>
						@else
							No doctor.
						@endif

						<hr>


						@if ($clinic->patient)
							<h3>Patient</h3>
							<div>
								<a href="{{ url('patients/'.$clinic->patient->id) }}">
									<div class="media">
										<div class="media-left">
											<img class="media-object" src="{{ $clinic->patient->avatar }}" alt="{{ $clinic->patient->name }}" style="height: 64px; width: 64px">
										</div>
										<div class="media-body">
											<h4 class="media-heading">{{ $clinic->patient->name }}</h4>

										</div>
									</div>
								</a>
							</div>

							<div class="mtop20">
								<button class="btn btn-success">
									<i class="fa fa-sign-out"></i>
									Done
								</button>
							</div>
						@else
							No patient.
						@endif
					</div>
				</div>
			</div>

			<div class="col-md-8">
				<div class="box">
					<div class="box-header">
						Queues ({{ count($appointments) }})
					</div>
					<div class="box-body">
						@foreach ($appointments as $appointment)
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="{{ $appointment->patient->avatar }}" alt="{{ $appointment->patient->name }}" style="height: 64px; width: 64px">
								</div>
								<div class="media-body">
									<span class="pull-right">
										<a href="{{ url('queue/enter/'.$appointment->id) }}" class="btn btn-primary">
											<i class="fa fa-sign-in"></i>
										</a>
									</span>
									<h4 class="media-heading">{{ $appointment->patient->name }}</h4>
								</div>
							</div>
							<hr>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
