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

Route::get('/', 'HomeController@index');
Route::get('syncServer/{site_id}', 'HomeController@syncServer');
Route::get('turnOn', 'HomeController@turnOn');
Route::get('turnOff', 'HomeController@turnOff');