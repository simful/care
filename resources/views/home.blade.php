@extends('layouts.app')
@section('content')
	<div class="col-md-8">
		<form class="form form-horizontal" method="post" action="{{url('newPatient')}}">
			{{ csrf_field() }}

			<div class="box">
				<div class="box-header">
					Pasien Baru
				</div>

				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="id" class="control-label col-md-4">No. RM</label>
								<div class="col-md-8">
									<input id="id" type="text" name="id" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="nik" class="control-label col-md-4">No. KTP/NIK</label>
								<div class="col-md-8">
									<input id="nik" type="text" name="nik" class="form-control">
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="name" class="control-label col-md-2">Nama Pasien</label>
						<div class="col-md-10">
							<input id="name" type="text" name="name" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="birth_date" class="control-label col-md-4">Tanggal Lahir</label>
								<div class="col-md-8">
									<input id="birth_date" type="text" name="birth_date" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="gender" class="control-label col-md-4">Jenis Kelamin</label>
								<div class="col-md-8">
									<select id="gender" class="form-control" name="gender">
										<option value="male">Laki-Laki</option>
										<option value="female">Perempuan</option>
									</select>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="birth_date" class="control-label col-md-4">Agama</label>
								<div class="col-md-8">
									<select class="form-control" name="religion">
										<option>Islam</option>
										<option>Katolik</option>
										<option>Protestan</option>
										<option>Hindu</option>
										<option>Budha</option>
										<option>Konghucu</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="occupation" class="control-label col-md-4">Pekerjaan</label>
								<div class="col-md-8">
									<input id="occupation" type="text" name="occupation" class="form-control">
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="marriage_status" class="control-label col-md-4">Status Pernikahan</label>
								<div class="col-md-8">
									<select id="marriage_status" class="form-control" name="marriage_status">
										<option value="belum">Belum Menikah</option>
										<option value="menikah">Menikah</option>
										<option value="janda">Janda</option>
										<option value="duda">Duda</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="phone" class="control-label col-md-4">Nomor Telepon</label>
								<div class="col-md-8">
									<input type="text" name="phone" class="form-control">
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="address" class="control-label col-md-2">Alamat</label>
						<div class="col-md-10">
							<textarea id="address" rows="4" name="address" placeholder="Alamat" class="form-control"></textarea>
						</div>
					</div>
				</div>

				<div class="box-footer text-right">
					<button type="submit" class="btn btn-primary btn-lg">
						<i class="fa fa-check"></i>
						Daftar
					</button>
				</div>
			</div>
		</form>
	</div>

	<div class="col-md-4">
		<div class="box">
			<div class="box-header">
				Cari Pasien
			</div>

			<div class="box-body">
				<form class="form-inline">
					<div class="input-group">
						<input type="text" name="q" placeholder="Nama, alamat, ..." class="form-control">
						<span class="input-group-btn">
							<button type="submit" class="btn btn-primary">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>
			</div>
		</div>

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
