@extends('layouts.app')
@section('content')
	<div class="box box" style="margin-top: 5px;">
		<div class="box-header">Daftar Pasien</div>
		<div class="box-body">
			<table class=" table table-bordered table-hover table-striped">
				<thead>
					<th>No RM</th>
					<th>Nama</th>
					<th>Tgl Lahir</th>
					<th>Pekerjaan</th>
					<th>Pernikahan</th>
					<th>Agama</th>
					<th>Alamat</th>
					<th style="width: 15%;">Opsi</th>
				</thead>

				@if (count($patients) >= 1)
					@foreach($patients as $p)
						<tr>
							<td>{{ $p->med_rec }}</td>
							<td>{{ $p->name }}</td>
							<td>{{ $p->birth_date }}</td>
							<td>{{ $p->job }}</td>
							<td>{{ $p->marriage }}</td>
							<td>{{ $p->religion }}</td>
							<td>{{ $p->address }}</td>
							<td>
								<div class="btn btn-group pull-right">
								<a href="{{url('/patient',$p->med_rec)}}" class="btn btn-primary btn-sm"><span class="fa fa-user"></span></a>
								<a href="#" class="btn btn-warning btn-sm"><span class="fa fa-edit"></span></a>
								<a href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
								</div>
							</td>
						</tr>
					@endforeach
				@else
					<tr>
						<td colspan="8" style="text-align: center;">Belum Ada Data</td>
					</tr>
				@endif
			</table>
		</div>
	</div>
@endsection
