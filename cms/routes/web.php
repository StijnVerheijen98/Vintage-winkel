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

Route::get( '/', function () {
	return view( 'welcome' );
} );

Route::group( [ 'prefix' => 'example' ], function () {
	Route::get( '/home', function () {
		return view( 'examples/home' );
	} );

	Route::get( '/simple', function () {
		return view( 'examples/simple' );
	} );

	Route::get( 'custom', function () {
		return view( 'examples/custom' );
	} );
} );

Route::group( [ 'prefix' => 'user' ], function () {
	Route::get( '/', 'User@all' );
	Route::get( '/add', 'User@add' );
} );

Route::group( [ 'prefix' => 'admin' ], function () {
	Voyager::routes();
} );
