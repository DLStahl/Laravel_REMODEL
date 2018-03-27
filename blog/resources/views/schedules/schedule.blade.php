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

	<div class = "container">
	    @yield('table_generator')
	</div>
@endsection('content')
