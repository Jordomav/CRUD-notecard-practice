<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'CardsController@index');
Route::get('show/{card}', 'CardsController@show');
Route::post('cards/{card}/notes', 'NotesController@store');
Route::get('notes/{note}/edit', 'NotesController@edit');
Route::post('cards/add/new', 'CardsController@store');
Route::get('cards/add', 'CardsController@create');
Route::patch('notes/{note}', 'NotesController@update');
Route::get('delete/{note}', 'NotesController@delete');
Route::patch('edit/{card}', 'CardsController@edit');
Route::get('edit/card/{card}', 'CardsController@update');
Route::get('delete/card/{card}', 'CardsController@delete');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
