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

Route::get('/home', 'StudentController@index')->name('home');

// task route
Route::get('/create', 'TaskController@create')->name('create');
Route::post('/create', 'TaskController@store')->name('store');
Route::get('/tasklist', 'TaskController@tasklist')->name('tasklist');
Route::get('/edit', 'TaskController@edit')->name('tasklist');
Route::get('edit/{id}', 'TaskController@editdelete')->name('editdelete');
Route::post('update/{id}', 'TaskController@update')->name('update');
Route::delete('delete/{id}', 'TaskController@delete')->name('delete');

//status route
Route::get('/create_status', 'StatuseController@create')->name('create_status');
Route::post('/create_status', 'StatuseController@store')->name('store_status');
Route::get('/statuslist', 'StatuseController@tasklist')->name('statuslist');
Route::get('/edit_status', 'StatuseController@edit')->name('statuslist');
Route::get('edit_status/{id}', 'StatuseController@editdelete')->name('editdeletestatus');
Route::post('update_status/{id}', 'StatuseController@update')->name('update_status');
Route::delete('delete_status/{id}', 'StatuseController@delete')->name('delete_status');