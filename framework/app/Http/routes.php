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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/myName', 'homeController@index');
Route::get('/register', 'homeController@getRegister');
Route::post('/postRegister', 'homeController@postRegister');




// Tahap 1
Route::get('/tahap-1', 'memberController@getTahap1');
Route::post('/tahap-1', 'memberController@postTahap1');

// Tahap 2
Route::get('/tahap-2', 'memberController@getTahap2');
Route::post('/tahap-2', 'memberController@postTahap2');

// Tahap 3
Route::get('/tahap-3', 'memberController@getTahap3');
Route::post('/tahap-3', 'memberController@postTahap3');


