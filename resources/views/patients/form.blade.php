@extends('layouts.app')

@section('title')
	{{ $isEdit ? 'Edit Patient' : 'Add New Patient' }}
@endsection

@section('content')
	<div class="container">
		<h2>@yield('title')</h2>
		@include('patients.form-partial')
	</div>
@endsection
