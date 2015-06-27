<?php namespace App\Http\Controllers\BackOffice;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Auth, \Redirect, \Input, \Validator, \Session;

class AssistanceController extends Controller {

    public function __construct(){
        $this->middleware('auth');
        $this->faq = array();
        $this->faq[0] = array();
        $this->faq[0][0] = "Comment ajouter un vin depuis l'interface ?";
        $this->faq[0][1] = "Comment supprimer un vin depuis l'interface ?";
        $this->faq[0][2] = "Comment modifier un vin depuis l'interface ?";
        $this->faq[0][3] = "Puis-je ajouter d'autres informations ?";
        $this->faq[0][4] = "Puis-je réinitialiser toute ma liste de vin ?";
        $this->faq[1] = array();
        $this->faq[1][0] = "Comment modifier mes informations personnelles ?";
        $this->faq[1][1] = "Puis-je avoir un second identifiant pour accéder à ce compte ?";
        $this->faq[1][2] = "Comment supprimer ce compte ?";
        $this->faq[1][3] = "Si je perds mon mot de passe, que se passe t-il ?";
        $this->faq[1][4] = "Comment modifier mon mot de pase ?";
        $this->faq[2] = array();
        $this->faq[2][0] = "Comment l'application Wino sera t-elle disponible ?";
        $this->faq[2][1] = "Puis-je inviter d'autres cavistes à s'inscrire ?";
    }

	/**
	 * Display a listing of the resource. 
	 *
	 * @return Response
	 */
	public function index(){
		$username = Auth::user()->name;
		$faq = $this->faq;
		return view('dashboard.assistance-home', compact('username', 'faq'));		
	}

    public function question($group, $item){
        $username = Auth::user()->name;
        if(isset($this->faq[$group][$item])){
            $faq = array();
            $faq['question'] = $this->faq[$group][$item];

            switch($group){
                case 0:
                    switch($item){
                        case 0:
                            $content = 'Hello';
                            break;
                        case 1:
                            $content = 'Hello';
                            break;
                        case 2:
                            $content = 'Hello';
                            break;
                        case 3:
                            $content = 'Hello';
                            break;
                        case 4:
                            $content = 'Hello';
                            break;
                    }
                    break;
                case 1:
                    switch($item){
                        case 0:
                            $content = 'Hello';
                            break;
                        case 1:
                            $content = 'Hello';
                            break;
                        case 2:
                            $content = 'Hello';
                            break;
                        case 3:
                            $content = 'Hello';
                            break;
                        case 4:
                            $content = 'Hello';
                            break;
                    }
                    break;
                case 2:
                    switch($item){
                        case 0:
                            $content = 'Hello';
                            break;
                        case 1:
                            $content = 'Hello';
                            break;
                    }
                    break;
            };

            $faq['content'] = $content;
            $faq['group'] = $group;
            $faq['item'] = $item;

            return view('dashboard.assistance-question', compact('username', 'faq'));
        }
        else{
            return Redirect::route('dashboard.assistance.index');
        }
    }
}
