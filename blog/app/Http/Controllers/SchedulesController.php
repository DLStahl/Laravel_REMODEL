<?php

namespace App\Http\Controllers;
use App\Schedule;

class SchedulesController extends Controller
{
	public function getIndex()
	{
		#process variable data
		#talk to the model
		#receive data back from model
		#compile or process data from the model if needed
		#pass that data to the correct view
		return view('schedules.index');
	}

	public function getInstructions()
	{
		return view('schedules.instructions');
	}

	public function getResident()
	{
		return view('schedules.resident');
	}

	public function getSchedule()
	{
		#This is all going to need to change
		$fp = fopen('../resources/data/02_18_2018.csv', 'r');
		$data['schedule'] = new Schedule($fp);
		fclose($fp);
		$data['element_ids'] = ["Date", "Location", "Room", "Case Procedures", "Lead Surgeon", "Patient Class", "Proc Start", "Proj End Time"];
		
		return view('schedules.table_generator')->withData($data);
	}

}
