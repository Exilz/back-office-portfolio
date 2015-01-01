
<?php

class LangController extends \BaseController {

	public function setEnglish()
	{
		Session::put('locale', 'en');
		return Redirect::to(URL::previous());
	}

	public function setFrench()
	{
		Session::put('locale', 'fr');
		return Redirect::to(URL::previous());
	}

}