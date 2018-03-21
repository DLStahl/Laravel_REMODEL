<?php

namespace App\Http\Controllers;

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
		return view('schedules.schedule');
	}
	
}