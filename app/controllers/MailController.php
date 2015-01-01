<?php

class MailController extends \BaseController {

	public function sendMail()
	{

		Mail::send('emails.default', array('key' => 'value'), function($message)
		{
			$request = Request::all();
    		$message->to('m.bertonnier@gmail.com', $request['name'])->subject($request['object']);
		});
	}

}
