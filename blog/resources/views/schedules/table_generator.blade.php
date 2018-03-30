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

			<?php $count = 0; $case_procedures = ""; ?>
			@foreach ($data['schedule']->surgeries as $element)
					<tr>
						<?php $count = $count + 1; ?>
						<td> {{ $count }} </td>

						@for($j = 0; $j < count($data['element_ids']); $j++)
							@if ($j == 3)
								<?php $case_procedures = explode("~~~", $element[$data['element_ids'][$j]]); ?>
								<td>
									<ul>
										@foreach ($case_procedures as $case)
											<li> {{$case}} </li>
										@endforeach
									</ul>
								
							@else 
								</td>
								<td> {{ $element[$data['element_ids'][$j]] }} </td>
							@endif
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

		<input type='submit' class='btn btn-lg btn-success' onclick="window.location='{{ url("resident/milestones") }}'">
	@else
		<h2>Error Loading Schedule</h2>
	@endif

@endsection