<?php namespace App\Http\Controllers;
use App\Wine;

class WelcomeController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(){
		$this->middleware('guest');
	}


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(){
		return view('home');
	}

}
