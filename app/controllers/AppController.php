<?php

class AppController extends \BaseController {

	public function index()
	{
		Return View::make('public.index');
	}

	public function about()
	{
		Return View::make('public.about');
	}

	public function portfolio()
	{
		Return View::make('public.portfolio');
	}

	public function contact()
	{
		Return View::make('public.contact');
	}

	public function mentionsLegales()
	{
		Return View::make('public.mentions-legales');
	}

}
