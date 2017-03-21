<div class="box">
	<div class="box-header">Reference</div>
	<div class="box-body">
		<div class="form-group">
			<label>
				<input type="radio" name="reference" value="null"> Go home
			</label>
		</div>
		<div class="form-group">
			<label>
				<input type="radio" name="reference" value="null"> Go to other hospital:
			</label>
		</div>

		<input type="text" class="form-control" name="refer_to" value="{{ old('refer_to', $appointment->refer_to) }}"/>
	</div>
</div>
