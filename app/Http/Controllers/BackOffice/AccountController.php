<?php namespace App\Http\Controllers\BackOffice;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Auth, \Redirect, \Input, \Validator, \Session;

class AccountController extends Controller {

	/**
	 * Display a listing of the resource. 
	 *
	 * @return Response
	 */
	public function index(){
        $username = Auth::user()->name;
		return view('dashboard.profile', compact('username'));		
    }
}
