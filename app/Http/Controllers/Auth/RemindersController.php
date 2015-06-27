<?php namespace App\Http\Controllers\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \View;

class RemindersController extends Controller {


    /**
     * Display the password reminder view.
     *
     * @return Response
     */
    public function getRemind(){
        $title = 'Wino | Mot de passe oublié';
        return view('auth.password-remind', compact('title'));
    }




    /**
     * Handle a POST request to remind a user of their password.
     *
     * @return Response
     */
    public function postRemind(){
        switch (Password::remind(Input::only('email'))){
            case Password::INVALID_USER:
                return Redirect::back()->with('error', Lang::get($reason));

            case Password::REMINDER_SENT:
                return Redirect::back()->with('status', Lang::get($reason));
        }
    }




    /**
     * Display the password reset view for the given token.
     *
     * @param  string  $token
     * @return Response
     */
    public function getReset($token = null){
        if (is_null($token)) App::abort(404);
        return View::make('password.reset')->with('token', $token);
    }




    /**
     * Handle a POST request to reset a user's password.
     *
     * @return Response
     */
    public function postReset(){
        $credentials = Input::only(
            'email', 'password', 'password_confirmation', 'token'
        );

        $response = Password::reset($credentials, function($user, $password){
            $user->password = Hash::make($password);
            $user->save();
        });

        switch ($response){
            case Password::INVALID_PASSWORD:
            case Password::INVALID_TOKEN:
            case Password::INVALID_USER:
                return Redirect::back()->with('error', Lang::get($response));

            case Password::PASSWORD_RESET:
                return Redirect::to('/');
        }
    }
}
