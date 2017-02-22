@extends('layouts.app')
@section('content')
	<div class="col-md-8 col-lg-9">
		@include('patients.form-partial')
	</div>

	<div class="col-md-4 col-lg-3">
		<form action="{{ url('patients') }}" method="get">
			<div class="box">
				<div class="box-header">
					Cari Pasien
				</div>

				<div class="box-body">
					<div class="input-group">
						<input type="text" name="q" placeholder="Nama, alamat, ..." class="form-control">
						<span class="input-group-btn">
							<button type="submit" class="btn btn-primary">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</div>

				<div class="box-footer">
					<a href="{{ url('patients') }}">Lihat Semua</a>
				</div>
			</div>
		</form>

		<div class="box no-padding">
			<div class="box-header">
				Hari ini
			</div>

			<div class="box-body">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>Pasien</td>
							<td class="text-right">1</td>
						</tr>
						<tr>
							<td>Tindakan</td>
							<td class="text-right">1</td>
						</tr>
						<tr>
							<td>Rujuk</td>
							<td class="text-right">1</td>
						</tr>
						<tr>
							<td>Pendapatan</td>
							<td class="text-right">1</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

	</div>
@endsection
