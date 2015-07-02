<?php namespace App\Http\Controllers\Dashboard;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Auth, \Redirect, \Input, \Validator, \Session;
use App\User;

class AccountController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
     public function index(){
         $username = Auth::user()->name;

         if(count(Input::all()) == 0){
             $user = Auth::user();
		     return view('dashboard.profile', compact('username', 'user'));
         }
         else{
             $rules = array(
 				'username' => 'required',
 	            'compagny' => 'required',
 	            'email' => 'required',
 			);

 			$validator = Validator::make(Input::all(), $rules);

 			if ($validator->fails()) {
 		        Session::flash('response', 'error');
 		        foreach($validator->failed() as $key => $value){
 		        	Session::flash($key, 'error');
 		        }
 				return Redirect::route('dashboard.account.index')
 					->withInput();
 			}
 			else{
 				$user = User::find(Auth::user()->id);
 				$user->name = Input::get('username');
 				$user->email = Input::get('email');
 				$user->compagny = Input::get('compagny');
 				$user->save();
 		        Session::flash('response', 'user-updated');
 				return Redirect::route('dashboard.account.index');
 			}
         }
     }
}
