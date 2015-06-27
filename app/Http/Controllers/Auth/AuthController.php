<?php namespace App\Http\Controllers\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use \Validator, \Input, \Auth, \Redirect, \Session, \Mail, Jenssegers\Date\Date;

class AuthController extends Controller {

	public function showLogin($email = null, $password = null){
		if(!Auth::check()){
			$title = 'Wino | Connexion';

			if($email && $password){
				$auth = array(
					'email' => $email,
					'password' => $password
				);
			}
			else{
				$auth = null;
			}

			return view('auth.login', compact('title', 'auth'));
		}

		return Redirect::route('backoffice.index');
	}

	public function doLogin(){
		$rules = array(
			'email'    => 'required|email',
			'password' => 'required|alphaNum|min:3'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::route('login')
				->with(['errors' => $validator->errors()])
				->withInput(Input::except('password'));
		}else {
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);
			if (Auth::attempt($userdata)) {
				return Redirect::route('backoffice.index');
			}
			else {
				return Redirect::route('login')
					->with(['errors' => 'error authentification'])
					->withInput(Input::except('password'));
			}
		}
	}

	public function logout(){
	    Auth::logout();
	    return Redirect::to('/');
	}
}
