<?php

class PagesController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Static Page Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|
	*/
	public function getAbout()
	{
		return View::make('pages.about');
	}

	public function getContact()
	{
		return View::make('pages.contact');
	}

}