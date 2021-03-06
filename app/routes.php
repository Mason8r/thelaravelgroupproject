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

Route::controller('pages', 'PagesController');
Route::controller('login', 'LoginController');
Route::controller('user', 'UserController');
Route::controller('/', 'HomeController');

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'));
Route::get('login', array('as' => 'login', 'uses' => 'LoginController@getLogin'));
Route::get('user/home', array('as' => 'user.home', 'uses' => 'UserController@getHome'));
