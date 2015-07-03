<?php namespace App\Http\Controllers\Caviste;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller {

	public function index(){
		$title = 'Wino | Votre nouveau canal de vente';
		return view('public.home', compact("title"));
	}

}
