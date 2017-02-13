@extends('layouts.app')
@section('content')
<div class="container-fluid">
<br/>
	<div class="col-md-8">
		<form class="form" method="post" action="">
			<table class="table table-hover table-striped table-bordered">
				<thead>
					<th colspan="4">Pasien baru</th>
				</thead>
				<tr>
					<td>No.RM</td>
					<td colspan="3"><input type="text" name="no_rm" class="form-control" placeholder="No. RM"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td colspan="3"><input type="text" name="name" class="form-control" placeholder="Nama"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td colspan="3"><input type="text" name="birth" class="form-control" placeholder="Tanggal Lahir"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<select class="form-control" name="gender">
							<option value="male">Laki-Laki</option>
							<option value="female">Perempuan</option>
						</select>
					</td>
					<td>Agama</td>
					<td>
						<select class="form-control" name="religion">
							<option>Islam</option>
							<option>Katolik</option>
							<option>Protestan</option>
							<option>Hindu</option>
							<option>Budha</option>
							<option>Konghucu</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td><input type="text" name="job" class="form-control"></td>
					<td>Status Pernikahan</td>
					<td>
						<select class="form-control" name="marriage">
							<option value="belum">Belum Menikah</option>
							<option value="menikah">Menikah</option>
							<option value="janda">Janda</option>
							<option value="duda">Duda</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td colspan="3">
						<textarea name="address" placeholder="Alamat" class="form-control"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="4"><button class="btn btn-primary btn-sm pull-right"><span class="fa fa-floppy-o"> Simpan</span></button></td>
				</tr>
			</table>
		</form>
	</div>            
	<div class="col-md-4">
		<table class="table table-bordered">
			<tr>
				<td colspan="2">Cari Pasien</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="s" class="form-control" placeholder="Cari">
				</td>
				<td style="width: 5%">
					<button class="btn btn-default"><span class="fa fa-search"></span></button>
				</td>
			</tr>
		</table>
		<table class="table table-bordered table-striped">
			<thead>
				<th colspan="2">Data Hari Ini</th>
			</thead>
			<tbody>
				<tr>
					<td>Pasien</td>
					<td>1</td>
				</tr>
				<tr>
					<td>Tindakan</td>
					<td>1</td>
				</tr>
				<tr>
					<td>Rujuk</td>
					<td>1</td>
				</tr>
				<tr>
					<td>Pendapatan</td>
					<td>1</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-md-12">
		<table class="table table-bordered">
			<tr>
				<th style="text-align: center;">#</th>
				<th style="text-align: center;">Nama</th>
				<th style="text-align: center;">No. RM</th>
				<th style="text-align: center;">Status</th>
				<th style="text-align: center;">Opsi</th>
			</tr>
		</table>
	</div>
</div>
@endsection
