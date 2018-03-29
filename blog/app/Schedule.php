<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
	public $surgeries;
	public $rooms;

    public function __construct($file_pointer = '')
	{
		$this->rooms = [];
		$this->surgeries = [];
		$map_keys = fgetcsv($file_pointer);
		while (($line = fgetcsv($file_pointer)) !== false)
		{
			$AM = false;
			$start_time = "";
			if(strlen($line[6]) > 0){
				$hourInt = intval(substr($line[6], 0, 2));
				if($hourInt > 12){
					$hour =$hourInt - 12;
				}
				elseif($hourInt == 12){
					$hour = 12;
				}
				else{
					$hour = $hourInt;
					$AM = true;
				}
				$start_time = $hour . ':' .substr($line[6], 2, 2);
				if($AM){
					$start_time = $start_time . " AM";
				}
				else{
					$start_time = $start_time . " PM";

				}
			}

			$AM = false;
			$end_time = "";
			if(strlen($line[7]) > 0){
				$hourInt = intval(substr($line[7], 0, 2));
				if($hourInt > 12){
					$hour =$hourInt - 12;
				}
				elseif($hourInt == 12){
					$hour = 12;
				}
				else{
					$hour = $hourInt;
					$AM = true;
				}
				$end_time = $hour . ':' .substr($line[7], 2, 2);
				if($AM){
					$end_time = $end_time . " AM";
				}
				else{
					$end_time = $end_time . " PM";

				}
			}

			$room_name = $line[2];
			$new_room = true;
			@foreach ($this->rooms as $element) {
				if($room_name == $this->rooms){
					$new_room = false;
					break;
				}
			}
			if($new_room){
				
			}

			$this->surgeries[] = [
				//Date
				$map_keys[0] => $line[0],
				//Location
				$map_keys[1] => $line[1],
				//Room
				$map_keys[2] => $line[2],
				//Case Procedures
				$map_keys[3] => preg_replace('/[\[\d+\]]/', '', $line[3]),
				//Lead Surgeon
				$map_keys[4] => preg_replace('/[\[\d+\]]/', '', $line[4]),
				//Patient Class
				$map_keys[5] => $line[5],
				//Proc Start
				$map_keys[6] => $start_time,
				//Proj End Time
				$map_keys[7] => $end_time
			];
		}
	}

	function &__get( $index )
	{
    	if( array_key_exists( $index, $this->surgeries ) )
    	{
        	return $this->surgeries[ $index ];
    	}

    	return;
    }
}
