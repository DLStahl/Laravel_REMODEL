<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
	public function getIndex()
	{
		#process variable data
		#talk to the model
		#receive data back from model
		#compile or process data from the model if needed
		#pass that data to the correct view
		return view('pages.welcome');
	}

	public function getAbout()
	{
		$first = "Yi";
		$last = "XU";

		$full = $first . " " . $last;
		$email = "xu.1882@osu.edu";

		$data['fullname'] = $full;
		$data['email'] = $email;
		//return view('pages.about')->withFullname($full)->withEmail($email);
		return view('pages.about')->withData($data);
	}

	public function getContact()
	{
		return view('pages.contact');
	}

	public function getPage(){
		return view('pages.page');
	}
}