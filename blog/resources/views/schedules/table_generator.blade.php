@extends('schedules.schedule')

@section('table_generator')

	@if(!is_null($data['schedule']))

		<table class="table table-striped table-bordered">
			<tr>
			<th>No.</th>
			@for ($i = 0; $i < count($data['element_ids']); $i++)
				<th> {{ $data['element_ids'][$i] }} </th>
			@endfor
	
			<th>Preference</th>
			</tr>

			<?php $count = 0; ?>
			@foreach ($data['schedule']->surgeries as $element)
					<tr>
						<?php $count = $count + 1; ?>
						<td> {{ $count }} </td>

						@for($j = 0; $j < count($data['element_ids']); $j++)
							<td> {{ $element[$data['element_ids'][$j]] }} </td>
						@endfor

						<td>
							<select>
								<option value= "default">Choose here</option>
								<option value= "first">First</option>
								<option value= "second">Second</option>
								<option value= "hird">Third</option>
							</select>
						</td>
					</tr>
			@endforeach
		</table>

	@else
		<h2>Error Loading Schedule</h2>
	@endif

@endsection