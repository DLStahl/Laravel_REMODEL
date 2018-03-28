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
		while (($line = fgetcsv($file_pointer)) !== false)
		{
			$this->surgeries[] = [
				$map_keys[0] => $line[0],
				$map_keys[1] => $line[1],
				$map_keys[2] => $line[2],
				$map_keys[3] => $line[3],
				$map_keys[4] => $line[4],
				$map_keys[5] => $line[5],
				$map_keys[6] => $line[6],
				$map_keys[7] => $line[7]
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
