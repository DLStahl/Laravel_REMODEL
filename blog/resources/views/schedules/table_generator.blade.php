@extends('schedules.schedule')

@section('table_generator')

	@if(!is_null($data['schedule']))

		<table class="table table-striped table-bordered" id="sched_table">
			<tr>
			<th>No.</th>
			@for ($i = 0; $i < count($data['element_ids']); $i++)
				@if($i!=0)
					<th> {{ $data['element_ids'][$i] }} </th>
				@endif
			@endfor
	
			<th>Preference</th>
			</tr>

			<?php $count = 0; $case_procedures = ""; ?>
			@foreach ($data['schedule']->surgeries as $element)
					<?php $count = $count + 1; ?>
					<tr id = "Row{{$count}}">
						<td> {{ $count }} </td>

						@for($j = 1; $j < count($data['element_ids']); $j++)
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
							<select onchange = "changePreferences(this);" class = "PreferenceSelector" id = "Pref{{$count}}">
								<option disabled selected="selected" value= "default">Choose here</option>
								<option value= "first">First</option>
								<option value= "second">Second</option>
								<option value= "third">Third</option>
							</select>
						</td>
					</tr>
			@endforeach
		</table>
		<input align = "right" type='submit' class='btn btn-md btn-success' onclick="checkSelectedPreferences();">
		<p id = "Error Message" style="color:red; display: none;">Please select a First, Second, and Third Preference</p>


		<!--'">-->
	@else
		<h2>Error Loading Schedule</h2>
	@endif

@endsection