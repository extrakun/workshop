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

Route::get('/notes/index', [
    'as' => 'notes.index',
    'uses' => 'NotesController@index'
]);

Route::get('/notes/create', [
    'as' => 'notes.create',
    'uses' => 'NotesController@create'
]);

Route::post('/notes/store', [
   'as' => 'notes.store',
   'uses' => 'NotesController@store'
]);