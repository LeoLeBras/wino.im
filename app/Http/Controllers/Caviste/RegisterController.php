<?php namespace App\Http\Controllers\Caviste;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use \Validator, \Input, \Auth, \Redirect, \Session, \Mail, Jenssegers\Date\Date;

class RegisterController extends Controller {

	public function showRegister(){
		$title = 'Wino | Enregistrement';
		if(Session::has('response') && Session::get('response') == 'success'){
			Auth::logout();
		}
		return view('auth.register', compact('title'));
	}

	public function doRegister(){

		$rules = array(
			'name'     => 'required',
			'compagny' => 'required',
			'email'    => 'required|email',
			'password' => 'required',
			'url' => 'required',
			'phone' => 'required',
			'place' => 'required',
			'city' => 'required',
			'schedule' => 'required',
			'siret' => 'required',
			'denomination' => 'required',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
	        Session::flash('response', 'error');
			return Redirect::route('register')
				->withInput(Input::except('password'));
		}
		else{
			if(User::where('email', '=', Input::get('email'))->count() == 0){
				User::create([
		        	'name' => Input::get('name'),
		        	'compagny' => Input::get('compagny'),
		            'email' => Input::get('email'),
		            'roles' => ['client'],
		            'password' => Input::get('password')
		        ]);

				Mail::send('emails.register', [
					'name' => Input::get('name'),
					'email' => Input::get('email'),
					'compagny' => Input::get('compagny'),
					'date' => Date::now()->format('l j F Y').' à '.Date::now()->format('H:i:s')],

					function($message){
						$message->to(Input::get('email'))
								->subject('WinoApp > Inscription réussie');
					}
				);

				Mail::send('emails.client-register', [
					'name' => Input::get('name'),
					'email' => Input::get('email'),
					'compagny' => Input::get('compagny'),
					'url' => Input::get('url'),
					'phone' => Input::get('phone'),
					'place' => Input::get('place'),
					'city' => Input::get('city'),
					'schedule' => Input::get('schedule'),
					'siret' => Input::get('siret'),
					'denomination' => Input::get('denomination'),
					'date' => Date::now()->format('l j F Y').' à '.Date::now()->format('H:i:s')],

					function($message){
						$message->to(env('MAIL_ACCOUNT').'@'.env('URL'))
								->subject('WinoApp > Inscription d\' un nouveau caviste');
					}
				);

		        Session::flash('response', 'success');
				return Redirect::route('register');
			}
			else{
		        Session::flash('response', 'error-email-doublon');
				return Redirect::route('register')
					->withInput(Input::except('password'));
			}
		}
	}
}
