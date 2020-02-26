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
    return view('/contact/index')->with('contacts', \App\Contact::all());
});

//Route::get('/', 'ContactController@index');

Route::get('/contatos', 'ContactController@index');

Route::get('/cadastrar', 'ContactController@create');

Route::post('/store', 'ContactController@store');

Route::get('/contato/{url}', 'ContactController@show');

Route::get('/contato/editar/{url}', 'ContactController@edit');

Route::put('/contato/update', 'ContactController@update');
