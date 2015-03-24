<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/main', function()
{
    return View::make('main/index');
});

Route::get('/accounts' , function(){
    Main::$view_source = "accounts/contact" ;
    return View::make('main/index');
}) ;

Route::get('/registration/signup' , array('as' => 'signup' , 'uses' => 'Main@getSignup')) ;

Route::post('/registration/signup' , array('as' => 'register' , 'uses' => 'Registration@signup')) ;

Route::post('/signin' , array('as' => 'signin' , 'uses' => 'Registration@signin')) ;

Route::get('' , array('as' => 'signout' , 'uses' => 'Registration@signout'));

Route::get('/accounts' , array('as' => 'accounts' , 'uses' => 'Main@accounts')) ;

Route::post('',  array('as' => 'addContact' , 'uses' => 'ContactController@putContact'));

Route::get('registration/test/{pic}' , array('as' => 'delete' , 'uses' => 'ContactController@removeContact')) ;

Route::get('/language' , array('as' => 'change' , 'uses' => 'Main@change'));

Route::post('update/{name}' , array('as' => 'update' , 'uses' => 'ContactController@updateContact'));

Route::post('search/display' , array('as' => 'search' , 'uses' => 'Main@searchPage')) ;

Route::get('export', array('as' => 'export', 'uses' => 'ContactController@export'));

Route::post('import' , array('as' => 'import' , 'uses' => 'ContactController@import'));