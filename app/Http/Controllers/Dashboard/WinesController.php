<?php namespace App\Http\Controllers\Dashboard;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Auth, \Redirect, \Input, \Validator, \Session;
use App\Wine;

class WinesController extends Controller {

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
		$wines = Wine::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
		return view('dashboard.home', compact('username', 'wines'));
	}

	public function add(){
		$username = Auth::user()->name;

		if(count(Input::all()) == 0){
			return view('dashboard.add', compact('username'));
		}
		else{

			$rules = array(
				'name' => 'required',
	            'year' => 'required',
	            'region' => 'required',
	            'color' => 'required',
	            'price' => 'required',
	            'stock' => 'required',
			);

			$validator = Validator::make(Input::all(), $rules);

			if ($validator->fails()) {
		        Session::flash('response', 'error');
		        foreach($validator->failed() as $key => $value){
		        	Session::flash($key, 'error');
		        }
				return Redirect::route('dashboard.wine.add')
					->withInput();
			}
			else{
				if(Input::get('color') == 'Blanc'){
					$color = 'white';
				}
				elseif(Input::get('color') == 'Rosé'){
					$color = 'pink';
				}
				else{
					$color = 'red';
				}

		        Wine::create([
		            'name' => Input::get('name'),
		            'year' => Input::get('year'),
		            'region' => Input::get('region'),
		            'color' => $color,
		            'price' => Input::get('price'),
		            'stock' => Input::get('stock'),
		            'user_id' => Auth::user()->id
		        ]);
		        Session::flash('response', 'wine-added');
				return Redirect::route('backoffice.index');
			}
		}

	}

	public function remove($id){
		if(Wine::where('id', $id)->where('user_id', Auth::user()->id)->count() == 1){
			Wine::where('id', $id)->delete();
		}
		Session::flash('response', 'wine-deleted');
		return Redirect::route('backoffice.index');
	}

	public function update($id){
		if(Wine::where('id', $id)->where('user_id', Auth::user()->id)->count() == 0){
			return Redirect::route('backoffice.index');
		}

		$username = Auth::user()->name;

		if(count(Input::all()) == 0){
			$wine = Wine::find($id);
			return view('dashboard.update', compact('username', 'wine'));
		}
		else{
			$rules = array(
				'name' => 'required',
	            'year' => 'required',
	            'region' => 'required',
	            'color' => 'required',
	            'price' => 'required',
	            'stock' => 'required',
			);

			$validator = Validator::make(Input::all(), $rules);

			if ($validator->fails()) {
		        Session::flash('response', 'error');
		        foreach($validator->failed() as $key => $value){
		        	Session::flash($key, 'error');
		        }
				return Redirect::route('dashboard.wine.update', $id)
					->withInput();
			}
			else{
				if(Input::get('color') == 'Blanc'){
					$color = 'white';
				}
				elseif(Input::get('color') == 'Rosé'){
					$color = 'pink';
				}
				else{
					$color = 'red';
				}

				$wine = Wine::find($id);
				$wine->name = Input::get('name');
				$wine->year = Input::get('year');
				$wine->region = Input::get('region');
				$wine->color = $color;
				$wine->price = Input::get('price');
				$wine->stock = Input::get('stock');
				$wine->save();
		        Session::flash('response', 'wine-updated');
				return Redirect::route('backoffice.index');
			}
		}
	}
}
