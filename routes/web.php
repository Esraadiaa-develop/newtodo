<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/new', 'pagesController@new');

Route::get('/todos', 'todosController@index')->name('todos');

Route::post('/todo/create', 'todosController@store');

Route::get('/todo/delete/{id}', 'todosController@destroy')->name('todo.delete');

Route::get('/todo/edit/{id}', 'todosController@edit')->name('todo.edit');

Route::post('/todo/update/{id}', 'todosController@update')->name('todo.update');

Route::get('/todo/completed/{id}', 'todosController@completed')->name('todo.completed');
