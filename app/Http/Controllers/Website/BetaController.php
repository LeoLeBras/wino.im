<?php namespace App\Http\Controllers\Website;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BetaController extends Controller {

	public function index(){
		return redirect('http://beta.wino.im');
	}

}
