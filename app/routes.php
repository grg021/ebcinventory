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
	return View::make('items.index');
});


Route::resource('items', 'ItemsController');
Route::resource('categories', 'CategoriesController');

Route::group(['prefix' => 'api/v1'], function() {
	Route::get('items', array('as'=>'api.v1.items', 'uses'=>'ItemsController@getDatatable'));	
});

