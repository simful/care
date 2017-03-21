<div class="box">
	<div class="box-header">
		Prescription
	</div>
	<div class="box-body">
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Dosage</th>
					<th>Qty</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($appointment->drugRecords as $item)
					<tr>
						<td>{{ $item->drug->name }}</td>
						<td>{{ $item->dosage }}</td>
						<td>{{ $item->qty }}</td>
						<td></td>
					</tr>
				@endforeach

				@if (!in_array($appointment->status, ['Finished', 'Canceled']))
					<tr>
						<td>
							<input type="text" placeholder="Drug name" name="description" class="form-control">
						</td>
						<td>
							<input type="text" placeholder="Dosage" name="price" class="form-control">
						</td>
						<td style="max-width: 100px">
							<input type="number" placeholder="Qty" name="qty" class="form-control text-right" value="1">
						</td>


						<td class="text-right">
							<button class="btn btn-primary" type="submit">
								<i class="fa fa-plus"></i>
								Add Item
							</button>
						</td>
					</tr>
					<tr>
						<td colspan="3" style="border-top: none">
							<input type="text" placeholder="Description (optional)" name="description" class="form-control">
						</td>
					</tr>
				@endif
			</tbody>
		</table>
	</div>
</div>
