<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function () {
	Route::get('/', 'HomeController@index');
    Route::auth();
});


Route::group(["prefix"=>"admin","middleware"=>"auth"],function (){

	Route::get('/', function(){

	});



});
