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


Route::get('/','HomeController@index')->name('index');

Route::post('/','HomeController@kaydet')->name('index.kaydet');

Route::get('/listeleme','HomeController@listeleme')->name('listeleme');

Route::delete('/listeleme/{id?}','HomeController@sil')->name('listeleme.sil');

Route::post('/duzeltme/{id}','HomeController@show')->name('duzeltme.show');
Route::put('/duzeltme/{id}','HomeController@update')->name('duzeltme.update');

