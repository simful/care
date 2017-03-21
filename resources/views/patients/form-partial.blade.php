@if ( ! $isEdit)
	<form class="form form-horizontal" method="post" action="{{ url('patients') }}">
@else
	<form class="form form-horizontal" action="{{ url('patients/' . $patient->id) }}" method="post">
		<input type="hidden" name="_method" value="put">
@endif
	{{ csrf_field() }}

	<div class="box">
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

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="id" class="control-label col-md-4">No. RM</label>
						<div class="col-md-8">
							<input id="id" type="text" name="id" class="form-control" value="{{ old('id', $patient->id) }}">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="nik" class="control-label col-md-4">No. KTP/NIK</label>
						<div class="col-md-8">
							<input id="nik" type="text" name="nik" class="form-control" value="{{ old('nik', $patient->nik) }}">
						</div>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="name" class="control-label col-md-2">Nama Pasien</label>
				<div class="col-md-10">
					<input id="name" type="text" name="name" class="form-control" value="{{ old('name', $patient->name) }}">
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="birth_date" class="control-label col-md-4">Tanggal Lahir</label>
						<div class="col-md-8">
							<input id="birth_date" type="text" name="birth_date" class="form-control datepicker" value="{{ old('birth_date', $patient->birth_date) }}">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="gender" class="control-label col-md-4">Jenis Kelamin</label>
						<div class="col-md-8">
							<select id="gender" class="form-control" name="gender">
								<option {{ old('gender', $patient->gender) == 'Male' ? 'selected' : '' }} value="male">Laki-Laki</option>
								<option {{ old('gender', $patient->gender) == 'Female' ? 'selected' : '' }} value="female">Perempuan</option>
							</select>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="religion" class="control-label col-md-4">Agama</label>
						<div class="col-md-8">
							<select id="religion" class="form-control" name="religion">
								<option {{ old('religion', $patient->religion) == 'Islam' ? 'selected' : '' }}>Islam</option>
								<option {{ old('religion', $patient->religion) == 'Katolik' ? 'selected' : '' }}>Katolik</option>
								<option {{ old('religion', $patient->religion) == 'Protestan' ? 'selected' : '' }}>Protestan</option>
								<option {{ old('religion', $patient->religion) == 'Hindu' ? 'selected' : '' }}>Hindu</option>
								<option {{ old('religion', $patient->religion) == 'Buddha' ? 'selected' : '' }}>Buddha</option>
								<option {{ old('religion', $patient->religion) == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="occupation" class="control-label col-md-4">Pekerjaan</label>
						<div class="col-md-8">
							<input id="occupation" type="text" name="occupation" class="form-control" value="{{ old('occupation', $patient->occupation) }}">
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
								<option {{ old('marriage_status', $patient->marriage_status) == 'Belum Menikah' ? 'selected' : '' }} value="Belum Menikah">Belum Menikah</option>
								<option {{ old('marriage_status', $patient->marriage_status) == 'Menikah' ? 'selected' : '' }} value="Menikah">Menikah</option>
								<option {{ old('marriage_status', $patient->marriage_status) == 'Janda/Duda' ? 'selected' : '' }} value="Janda/Duda">Janda/Duda</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="phone" class="control-label col-md-4">Nomor Telepon</label>
						<div class="col-md-8">
							<input type="text" name="phone" class="form-control" value="{{ old('phone', $patient->phone) }}">
						</div>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="address" class="control-label col-md-2">Alamat</label>
				<div class="col-md-10">
					<textarea id="address" rows="4" name="address" placeholder="Alamat" class="form-control">{{ old('address', $patient->address) }}</textarea>
				</div>
			</div>
		</div>

		<div class="box-footer">
			<button type="submit" class="btn btn-success btn-lg">
				<i class="fa fa-check"></i>
				Save
			</button>

			<a href="{{ url('patients') }}" class="btn btn-default btn-lg">
				<i class="fa fa-times fa-icon"></i>
				Cancel
			</a>
		</div>
	</div>
</form>
