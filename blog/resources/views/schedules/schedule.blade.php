@extends('main')


@section('content')
	<h1>Schedule Page</h1> <br>
	<h5>Select Day to Schedule</h5>
	<!-- Button to bring up schedule n -->
	<button type="button" class="btn btn-primary" onclick=""><?php echo date("l"),' ', date('F'),' ',date('j'); ?></button>
	<!-- Button to bring up schedule n+1 -->
	<button type="button" class="btn btn-primary" onclick=""><?php echo date("l", strtotime('+1 day')),' ', date('F',strtotime('+1 day')),' ',date('j',strtotime('+1 day')); ?></button>
	<!-- Button to bring up schedule n+2 -->
	<button type="button" class="btn btn-primary" onclick=""><?php echo date("l", strtotime('+2 day')),' ', date('F',strtotime('+2 day')),' ',date('j',strtotime('+2 day')); ?></button>


	<br><br><br>
	<div id="filter">
    	<h5>Filter Schedule</h5> <br>
    	<!--category filter-->
    	<select id="categories">
        <option value="none">-Category-</option>
        <option value="none">-Admin needs to set-</option>
    	</select>
    	<!--doctor filter-->
    	<select id="doctors">
        <option value="none">-Doctors-</option>
        <option value="none">-Needs parser-</option>
    	</select>
    	<!--start after filter-->
    	<select id="start_after">
    	<option value="none">-Start After-</option>
    	@for($i=0; $i<12; $i++)
        	@if($i==0)
            	<option value="12 am">12 AM</option>
        	@else
            	<option value="' ,$i, ' am">{{$i}} AM</option>
        	@endif
    	@endfor
    	@for($i=0; $i<12; $i++)
        	@if($i==0)
            	<option value="12 pm">12 PM</option>
        	@else
            	<option value="',$i,' pm">{{$i}} PM</option>
        	@endif
    	@endfor
    	</select>

    	<!--//end before filter-->
    	<select id="end_before">
    	<option value="none">-End Before-</option>
    	@for($i=0; $i<12; $i++)
        	@if($i==0)
            	<option value="12 am">12 AM</option>
        	@else
            	<option value="',$i,' am">{{$i}} AM</option>
        	@endif
    	@endfor
    	@for($i=0; $i<12; $i++)
        	@if($i==0)
            	<option value="12 pm">12 PM</option>
        	@else
            	<option value="',$i,' pm">{{$i}} PM</option>
        	@endif
    	@endfor
    	</select>
    	<button type="button" class="btn btn-primary" onclick="">Filter</button>
	</div>

	<br><br>

	<div class = "container">
	    @yield('table_generator')
	</div>
@endsection('content')
