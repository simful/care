@extends('layouts.app')

@section('title')
	Patients
@endsection

@section('content')
	<div class="container">
		<h2>@yield('title')</h2>

		<div class="mbot20">
			<a href="{{ url('patients/create') }}" class="btn btn-primary">
				<i class="fa fa-plus fa-icon"></i>
				New Patient
			</a>

			<form class="form-inline pull-right">
				@include('partials.search-form')
			</form>
		</div>

		<div class="box" style="margin-top: 5px;">
			<div class="box-body">

				@foreach ($patients as $patient)
					<a href="{{ url("patients/$patient->id") }}">
						<div class="media">
							<div class="media-left">
								<img class="media-object" src="{{ $patient->avatar }}" alt="{{ $patient->name }}" style="height: 64px; width: 64px">
							</div>
							<div class="media-body">
								<h4 class="media-heading">{{ $patient->name }}</h4>
								<p>{{ $patient->city }}</p>
							</div>
						</div>
					</a>
					<hr>
				@endforeach

				{{ $patients->links() }}
			</div>
		</div>
	</div>
@endsection
