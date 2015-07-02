<?php namespace App\Http\Controllers\Caviste;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Mail, \Input;
use Jenssegers\Date\Date;

class JoinController extends Controller {

	public function send(){
		Mail::send('emails.invit', [
			'name' => Input::get('name'),
			'email' => Input::get('email'),
			'phone' => Input::get('phone'),
			'date' => Date::now()->format('l j F Y').' à '.Date::now()->format('H:i:s')],

			function($message){
				$message->to(env('MAIL_ACCOUNT').'@'.env('URL'))->subject('WinoApp > Demande d\'inscription');
			}
		);
	}
}
