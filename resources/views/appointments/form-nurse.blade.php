<div class="box">
	<div class="box-header">Filled by Nurse</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-6">
				<label>Current Physical Condition</label>
				<hr>
				<div class="form-group">
					<label for="height" class="control-label">Current Height</label>
					<input type="text" name="height" class="form-control" value="{{ old('height', $appointment->height) }}">
				</div>

				<div class="form-group">
					<label for="weight" class="control-label">Current Weight</label>
					<input type="text" name="weight" class="form-control" value="{{ old('weight', $appointment->weight) }}">
				</div>
			</div>
			<div class="col-md-6">
				<label>Blood Pressure</label>
				<hr>
				<div class="form-group">
					<label for="bp_sys" class="control-label">Systolic (mm Hg)</label>
					<input id="bp_sys" type="text" name="bp_sys" class="form-control" value="{{ old('bp_sys', $appointment->bp_sys) }}">
				</div>

				<div class="form-group">
					<label for="bp_dia" class="control-label">Diastolic (mm Hg)</label>
					<input id="bp_dia" type="text" name="bp_dia" class="form-control" value="{{ old('bp_dia', $appointment->bp_dia) }}">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6"></div>
		</div>
	</div>
</div>
