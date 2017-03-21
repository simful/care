<div class="box">
	<div class="box-header">
		Assessment
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="subjective" class="control-label">Subjective</label>
					<textarea name="subjective" class="form-control" rows="5">{{ old('subjective', $appointment->subjective) }}</textarea>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="physical_check" class="control-label">Physical Check</label>
					<textarea id="physical_check" name="physical_check" class="form-control" rows="5">{{ old('physical_check', $appointment->physical_check) }}</textarea>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="icd10" class="control-label">ICD-10</label>
					<input type="text" name="icd10" class="form-control" value="{{ old('icd10', $appointment->icd10) }}">
				</div>
			</div>
		</div>
	</div>

	<div class="box-footer">
		<button class="btn btn-primary">
			<i class="fa fa-check fa-icon"></i>
			Update
		</button>
	</div>
</div>
