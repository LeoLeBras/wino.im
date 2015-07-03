<?php namespace App\Http\Controllers\Dashboard;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Auth, \Redirect, \Input, \Validator, \Session;
use App\FaqCategory;
use App\FaqItem;

class AssistanceController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(){
		$username = Auth::user()->name;
		$faq = FaqCategory::with('items')->get();
		return view('dashboard.assistance-home', compact('username', 'faq'));
	}

    public function question($group, $item){
        $username = Auth::user()->name;
        $faq = FaqItem::where('category_id', $group)->find($item);

        if(count($faq) == 1){
            return view('dashboard.assistance-question', compact('username', 'faq'));
        }
        return Redirect::route('dashboard.assistance.index');
    }
}
