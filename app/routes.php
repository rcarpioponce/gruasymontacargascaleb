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

Route::get('/', function(){
	return View::make('web.home.index');
});

Route::get('/servicios', function(){
	return View::make('web.servicios.index');
});


Route::get('/contacto', function(){
	return View::make('web.contacto.index');
});
Route::post('/contacto', function(){
	return View::make('web.contacto.index');
});
