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

Route::get('admin', function() {
    return view('admin_template');
});

Route::get('test', 'TestController@index');

/*Route::get('tasks', ['as' => 'tasks', 'uses' => 'TasksController@index']);
Route::post('tasks/store', ['as' => 'tasks.store', 'uses' => 'TasksController@store']);
Route::get('tasks/create', ['as' => 'tasks.create', 'uses' => 'TasksController@create']);
Route::get('tasks/{id}', ['as' => 'tasks', 'uses' => 'TasksController@show'])
    ->where('id', '[0-9]+');
Route::get('tasks/edit/{id}', ['as' => 'tasks.edit', 'uses' => 'TasksController@edit'])
    ->where('id', '[0-9]+');*/

Route::resource('tasks', 'TasksController');