<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
	public $surgeries;

    public function __construct($file_pointer = '')
	{
		$this->surgeries = [];
		$map_keys = fgetcsv($file_pointer);
		$room_names = [];
		$room_times = [];
		$room_count = 0;
		while (($line = fgetcsv($file_pointer)) !== false)
		{
			//Parse Proc Start TIme
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

			//Parse Proj End Time
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

			//Get Room and check to see if its a new room
			$room_name = $line[2];
			$new_room = true;
			foreach($room_names as $element) {
				if($room_name == $element){
					$new_room = false;
					break;
				}
			}
			if($new_room){
				$room_names[] = $room_name;
				$room_count = $room_count + 1;
				$room_times[$room_name] = array($line[6], $line[7]);
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
			else{
				$old_room;
				$index;
				for($i = 0; $i < $room_count; $i++){
					if($room_name == $this->surgeries[$i]["Room"]){
						$old_room = $this->surgeries[$i]["Room"];
						$index = $i;
						break;
					}
				}
				
				$old_start_time = $room_times[$old_room][0];
				if($old_start_time > $line[6]){
					$this->surgeries[$index][$map_keys[6]] = $start_time;
				}
				$old_end_time = $room_times[$old_room][1];
				if($old_end_time < $line[7]){
					$this->surgeries[$index][$map_keys[7]] = $end_time;
				}

				$this->surgeries[$index]["Case Procedures"] = $this->surgeries[$index]["Case Procedures"] . "~~~" . preg_replace('/[\[\d+\]]/', '', $line[3]) ;
			}

			
		}
		usort($this->surgeries,array($this, "cmp"));
	}


	function cmp($a, $b){
		return strcmp($a["Room"], $b["Room"]);
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
