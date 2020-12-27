<?php

namespace App\Controllers;

class ContactController extends BaseController
{
    public function index()
    {
        $name['name'] = "CodingCuk!";
        return view('contact', $name);
    }
}
