<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function about()
	{
		return view('about');
	}

	public function profil()
	{
		return view('profil');
	}
}
