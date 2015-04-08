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
	return View::make('login');
});

Route::post('/user/login', array('as' => 'postLogin', 'uses' => 'HomeController@login'));
Route::post('/user/register', array('as' => 'postRegister', 'uses' => 'HomeController@register'));