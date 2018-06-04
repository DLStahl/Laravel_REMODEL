<?php

namespace App;

// Constant variables
define("DEFAULTSET", "200");

class Filter
{
	private $date;
	private $firstday;
	private $secondday;
	private $thirdday;
    private $category;
    private $doctor;
	private $time_start;
	private $time_end;
	
	private function setupdate()
	{
		// Calculate next three working dates
		$today = getdate();
		// date("l", strtotime('+4 day'))
		if (date("l", strtotime('today')) == 'Wednesday') {
			$firstday = date("Y", strtotime('+1 day')).date("m", strtotime('+1 day')).date("d", strtotime('+1 day'));
			$secondday = date("Y", strtotime('+2 day')).date("m", strtotime('+2 day')).date("d", strtotime('+2 day'));
			$thirdday = date("Y", strtotime('+5 day')).date("m", strtotime('+5 day')).date("d", strtotime('+5 day'));
		}
		elseif(date("l", strtotime('today')) == 'Thursday') {
			$firstday = date("Y", strtotime('+1 day')).date("m", strtotime('+1 day')).date("d", strtotime('+1 day'));
			$thirdday = date("Y", strtotime('+4 day')).date("m", strtotime('+4 day')).date("d", strtotime('+4 day'));
			$thirdday = date("Y", strtotime('+5 day')).date("m", strtotime('+5 day')).date("d", strtotime('+5 day'));
		}
		elseif(date("l", strtotime('today')) == 'Friday') {
			$firstday = date("Y", strtotime('+3 day')).date("m", strtotime('+3 day')).date("d", strtotime('+3 day'));
			$thirdday = date("Y", strtotime('+4 day')).date("m", strtotime('+4 day')).date("d", strtotime('+4 day'));
			$thirdday = date("Y", strtotime('+5 day')).date("m", strtotime('+5 day')).date("d", strtotime('+5 day'));
		}
		elseif(date("l", strtotime('today')) == 'Saturday') {
			$firstday = date("Y", strtotime('+2 day')).date("m", strtotime('+2 day')).date("d", strtotime('+2 day'));
			$thirdday = date("Y", strtotime('+3 day')).date("m", strtotime('+3 day')).date("d", strtotime('+3 day'));
			$thirdday = date("Y", strtotime('+4 day')).date("m", strtotime('+4 day')).date("d", strtotime('+4 day'));
		}
		else {
			$firstday = date("Y", strtotime('+1 day')).date("m", strtotime('+1 day')).date("d", strtotime('+1 day'));
			$thirdday = date("Y", strtotime('+2 day')).date("m", strtotime('+2 day')).date("d", strtotime('+2 day'));
			$thirdday = date("Y", strtotime('+3 day')).date("m", strtotime('+3 day')).date("d", strtotime('+3 day'));
		}
	}

    public function __construct()
    {
		setupdate();

		$this->$category = DEFAULTSET;
		$this->$doctor = DEFAULTSET;
		$this->$time_start = 0000;
		$this->$time_end = 2359;
				
	}

	private function updatedate($date = 1)
	{
		switch($date)
		{
			
			case 2:
				$this->$date = $this->$secondday;
				break;
			case 3:
				$this->$date = $this->$thirdday;
				break;
			case 1:			
			default:
				$this->$date = $this->$firstday;
				break;
		}
	}

	private function updatecategory($selection = DEFAULTSET)
	{
		$this->$category = $selection;
	}

	private function updatedoctor($selection = DEFAULTSET)
	{
		$this->$doctor = $selection; 
	}

	private function updatetime($start = 0000, $end = 2359)
	{
		$this->$time_start = $start;
		$this->$time_end = $end;
	}

	public function updatefilter($date = 1, $category = DEFAULTSET, $doctor = DEFAULTSET, 
		$start = 0000, $end = 0000)
	{
		updatedate($date);
		updatecategory($category);
		updatedoctor($doctor);
		updatetime($start, $end);

		return ['date' => $this->$date, 'category' => $this->$category, 
		'doctor' => $this->$doctor, 'time_start' => $this->$time_start, 
		'time_end' => $this->$time_end];
	}

	public function reportdates()
	{
		return ['first' => $this->$firstday, 'second' => $this->$secondday, 'third' => $this->$thirdday];
	}

} 

