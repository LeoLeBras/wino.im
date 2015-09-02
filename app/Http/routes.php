<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['namespace' => 'Website'], function(){
    Route::get('/', ['uses' => 'HomeController@index']);
});
Route::group(['prefix' => 'caviste'], function(){
    Route::group(['namespace' => "Dashboard", 'prefix' => 'dashboard'], function(){
        Route::get('/home', ['as' => 'backoffice.index', 'uses' => 'WinesController@index']);
        Route::get('/wine/add', ['as' => 'dashboard.wine.add', 'uses' => 'WinesController@add']);
        Route::post('/wine/add', ['uses' => 'WinesController@add']);
        Route::get('/wine/update/{id}', ['as' => 'dashboard.wine.update', 'uses' => 'WinesController@update']);
        Route::post('/wine/update/{id}', ['uses' => 'WinesController@update']);
        Route::get('/wine/remove/{id}', ['as' => 'dashboard.wine.remove', 'uses' => 'WinesController@remove']);

        Route::group(['prefix' => 'assistance'], function(){
            Route::get('/', ['as' => 'dashboard.assistance.index', 'uses' => 'AssistanceController@index']);
            Route::get('/faq/{group}/{question}', ['as' => 'dashboard.assistance.question', 'uses' => 'AssistanceController@question']);
        });

        Route::group(['prefix' => 'account'], function(){
            Route::get('/', ['as' => 'dashboard.account.index', 'uses' => 'AccountController@index']);
            Route::post('/', ['uses' => 'AccountController@index']);
        });
    });

    Route::group(['namespace' => "Caviste"], function(){
        Route::get('/', ['as' => 'homepage', 'uses' => 'HomeController@index']);
        Route::get('/join', ['as' => 'join', 'uses' => 'JoinController@send']);
    });

    Route::group(['namespace' => "Auth", 'prefix' => 'auth'], function(){
        Route::get('login/{email?}/{password?}', array('as' => 'login', 'uses' => 'AuthController@showLogin'));
        Route::post('login', array('uses' => 'AuthController@doLogin'));
        Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@logout'));
        Route::get('resetpassword', array('as' => 'reset.password', 'uses' => 'AuthController@showResetPassword'));
        Route::controller('password', 'RemindersController');
    });
});
