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
			@foreach ($data['schedule'] as $element){
				@for($i = 0; $i < count($element); $i++)
					<tr>
						<td> {{ $i + 1 }} </td>

						@for($j = 0; $j < count($data['element_ids']); $j++)
							<td> {{ $element[$i][$data['element_ids'][$j]] }} </td>
						@endfor

						<td>
							<select>
								<option value= "first">First</option>
								<option value= "second">Second</option>
								<option value= "third">Third</option>
							</select>
						</td>
					</tr>
				@endfor
			@endforeach
		</table>

	@else
		<h2>Error Loading Schedule</h2>
	@endif

@endsection
