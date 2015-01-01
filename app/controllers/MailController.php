<?php

class MailController extends \BaseController {

	public function sendMail()
	{
		Mail::send('emails.default', array('key' => 'value'), function($message)
		{
			$request = Request::all();
			$message->author = $request['name'];
			$message->email = $request['mail'];
			$message->message = $request['message'];
			$message->from('contact@maximebertonnier.fr', 'Laravel');
    		$message->to('m.bertonnier@gmail.com', $request['name'])->subject($request['object']);
		});

		return Redirect::to(URL::previous());
	}

}
