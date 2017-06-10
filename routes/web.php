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
Auth::routes();
Route::get('/bin','BlogController@bin');
Route::get('/bin/{id}/restore','BlogController@restore');
Route::delete('/bin/{id}/destroyBlog','BlogController@destroyBlog');


//Route::get('/admin','AdminController@index')->middleware('admin');

Route::get('/admin','AdminController@index');


Route::get('/','BlogController@index');
Route::get('/create','BlogController@create');
Route::post('/store','BlogController@store');
Route::get('/{id}','BlogController@show');
Route::get('/{id}/edit','BlogController@edit');
Route::patch('/{id}','BlogController@update');
Route::delete('/{id}','BlogController@destroy');


//Route::get('/home', 'HomeController@index')->name('home');
