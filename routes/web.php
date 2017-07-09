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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/contactos','ContactosController');

Route::get('/fb/callback','FacebookController@callback')->name('facebook.callback');
Route::get('/fb/redirect','FacebookController@redirect')->name('facebook.redirect');
Route::get('/fb','FacebookController@index')->name('facebook.index');
