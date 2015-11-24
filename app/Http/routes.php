<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'index',
    'uses' => 'IndexController@index',
    'middleware' => 'stockLevel'
]);

Route::get('/stock/{clinicId}', [
    'as' => 'stock',
    'uses' => 'IndexController@stock',
    'middleware' => 'stockLevel'
]);

Route::post('/stock/set', [
    'as' => 'stockSet',
    'uses' => 'IndexController@stockSet'
]);

Route::get('/low/stock', [
    'as' => 'index',
    'uses' => 'IndexController@lowStock',
]);
