<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('contactus', 'PagesController@getContact');
Route::post('contactus','PagesController@postContact');
Route::get('sponsors', 'PagesController@sponsors');
Route::get('events', 'PagesController@events');
Route::get('workshops', 'PagesController@workshops');
Route::get('culturals', 'PagesController@culturals');
Route::get('event/{slug}', 'PagesController@event');
Route::get('2016', 'PagesController@vivaan2016');
Route::get('sign-out', 'AuthController@logout');
//events pages
Route::get('{fest}/events', 'PagesController@festevents');


Route::group(['middleware' => 'guest'], function() {
	//Login
	Route::get('sign-in', 'AuthController@getLogin');
	Route::post('sign-in', 'AuthController@postLogin');

	//Registration 
	Route::get('register','AuthController@getRegister');
	Route::post('register','AuthController@postRegister');

	// Password Reset
	Route::get('password/reset/{code}','PasswordController@getReset');
	Route::post('password/reset/{code}','PasswordController@postReset');
	Route::get('password/reset','PasswordController@getRequest');
	Route::post('password/reset','PasswordController@postRequest');

});



Route::group(['middleware' => 'user'], function() {

	Route::get('profile', 'DashboardController@profile');
	Route::post('updateprofile', 'DashboardController@updateProfile');
	Route::post('updatepassword', 'DashboardController@updatePassword');
	Route::get('events-registered', 'DashboardController@events');
	Route::post('create-team', 'DashboardController@createTeam');

});

Route::group(['middleware' => 'admin'], function() {

	Route::get('/admin', 'AdminController@home');
	Route::get('/admin/event', 'AdminController@event');
	
});