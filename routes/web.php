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

Route::get('/', 'logController@index');
Route::get('gologin/', 'logController@gologin');
Route::post('rutalogin/', 'logController@accept');
Route::post('guardarcorreo/','logController@guardarcorreo');
Route::get('perfil/', 'logController@perfil');
Route::get('goforgot/', 'logController@gopass');