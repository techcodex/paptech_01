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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','TodosController@index');

Route::get('/delete/{id}','TodosController@delete')->name('todo.delete');

Route::post('/store', 'TodosController@store')->name('todo.store');

Route::get('/deactive/{id}','TodosController@deactive')->name('todo.deactive');

Route::get('/active/{id}','TodosController@active')->name('todo.active');
