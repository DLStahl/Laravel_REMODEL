@extends('main')


@section('content')
	<h1>Schedule Page</h1> <br>
	<h5>Select Day to Schedule</h5>
	<!-- Button to bring up schedule n -->
	<button type="button" class="btn btn-primary" onclick=""><?php echo date("l", strtotime('+2 day')),' ', date('F',strtotime('+2 day')),' ',date('j', strtotime('+2 day')); ?></button>
	<!-- Button to bring up schedule n+1 -->
	<button type="button" class="btn btn-primary" onclick=""><?php echo date("l", strtotime('+3 day')),' ', date('F',strtotime('+3 day')),' ',date('j',strtotime('+3 day')); ?></button>
	<!-- Button to bring up schedule n+2 -->
	<button type="button" class="btn btn-primary" onclick=""><?php echo date("l", strtotime('+4 day')),' ', date('F',strtotime('+4 day')),' ',date('j',strtotime('+4 day')); ?></button>


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
    <script type="text/javascript">
        var tab, docList;
        var docs=[];
        tab=document.getElementById("sched_table");
        docList=document.getElementById("doctors");
        //get all unique doc names
        for(var i=0; i<tab.rows.length; i++){
            if(i!=0){
                var element=tab.rows[i].cells[4].innerHTML;
                if(!docs.includes(element)){
                    docs.push(element);
                }
            }
        }
        docs.sort();
        //create options for select
        for(var i=0; i<docs.length; i++){
            var option=document.createElement("option");
            option.value=docs[i];
            option.text=docs[i];
            docList.appendChild(option);
        }

        

    </script>

    <!--Preference JS -->
    <script type="text/javascript">
        function changePreferences(dropdown){
            var optionSelectedIndex = dropdown.selectedIndex;
            var selectedPref = dropdown.options[optionSelectedIndex].innerHTML;
            var dropdownId = dropdown.id;
            var prefDropdowns = document.getElementsByClassName("PreferenceSelector");
            for(var i = 0; i < prefDropdowns.length; i++){
                if(prefDropdowns[i].id !== dropdownId){
                    if(selectedPref === prefDropdowns[i].options[prefDropdowns[i].selectedIndex].innerHTML){
                        prefDropdowns[i].selectedIndex = 0;
                            break;
                    }                
                }                
            }
        }

        function checkSelectedPreferences(){
            var count = 3;
            var prefDropdowns = document.getElementsByClassName("PreferenceSelector");
            for(var i = 0; i < prefDropdowns.length; i++){
                var selectedPref = prefDropdowns[i].options[prefDropdowns[i].selectedIndex].innerHTML;
                if(selectedPref === "First" || selectedPref === "Second" || selectedPref === "Third"){
                    count = count - 1;
                }
            }
            if(count > 0){
                document.getElementById("Error Message").style.display = "block";
            }
            else{
                window.location='{{ url("resident/milestones") }}';
            }
        }

    </script>
    
@endsection('content')
