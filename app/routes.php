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

Route::controller('static', 'StaticController');

Route::controller('login', 'LoginController');

Route::controller('/', 'HomeController');

/*

Route::get('/', function()
{
	return View::make('welcome');
});

Route::get('user/', function()
{
    $name = 'Stu';
    return $name;
});

*/