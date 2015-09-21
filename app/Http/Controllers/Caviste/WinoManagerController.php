<?php namespace App\Http\Controllers\Caviste;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WinoManagerController extends Controller {

	public function index(){
		return view('wino-manager.index');
	}

}
