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

//route ClientController
Route::get('/', 'ClientController@index');
Route::get('liste', 'ClientController@liste');
Route::get('showClient/{id}', 'ClientController@showClient');
Route::get('create', 'ClientController@create');
Route::post('save', 'ClientController@save');
Route::get('edit/{id}', 'ClientController@edit');
Route::post('update/{id}', 'ClientController@update');
Route::get('delete/{id}', 'ClientController@delete');
Route::get('materiel', 'ClientController@ajoutmateriel');
Route::post('savemateriel', 'ClientController@savemateriel');
Route::post('search', 'ClientController@search');
//route ExcelController
Route::get('importExport', 'ExcelController@importExport');
Route::get('downloadExcel/{type}', 'ExcelController@downloadExcel');
Route::post('importExcel', 'ExcelController@importExcel');
//route MaterielController
Route::get('listeMateriel', 'MaterielController@liste');
Route::get('show/materiel/{id}', 'MaterielController@show');
Route::post('searchMateriel', 'MaterielController@search');
//route StatController
Route::get('stats', 'StatController@index');
//route authentification
Auth::routes();
//route admin voyager
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
