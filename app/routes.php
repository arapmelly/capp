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


	if(Confide::user()){
		return Redirect::to('dashboard');
	} else {
		return Redirect::to('users/login');
	}
	
});


Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');

Route::group(array('before' => 'auth'), function()
{





Route::get('dashboard', function(){

	if(Confide::user()->user_type == 'admin'){
		return Redirect::to('admin');
	}elseif(Confide::user()->user_type == 'client'){
		return Redirect::to('client');
	} else {
		return Redirect::to('users/login');
	}

});



Route::get('admin', function(){

	//$resumes = Resume::all();

	$resumes = array();

	return View::make('hello', compact('resumes'));
});


Route::get('client', function(){

	//$resumes = DB::table('resumes')->where('user_id', '=', Confide::user()->id)->get();

	$resumes = array();
	return View::make('resumes.index', compact('resumes'));
});






}); //end of route group
