<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['name'] = "CodingCuk!";
		return view('index', $data);
	}

	//--------------------------------------------------------------------

}
