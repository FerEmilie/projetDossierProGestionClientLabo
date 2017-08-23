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

Route::get('/', 'ClientController@index');
Route::get('/liste', 'ClientController@liste');
Route::get('/show/{id}', 'ClientController@show');
Route::get('/create', 'ClientController@create');
Route::post('/save', 'ClientController@save');
Route::get('/edit/{id}', 'ClientController@edit');
Route::post('/update/{id}', 'ClientController@update');
Route::get('/delete/{id}', 'ClientController@delete');
Route::get('/materiel', 'ClientController@ajoutmateriel');
Route::post('/savemateriel', 'ClientController@savemateriel');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
