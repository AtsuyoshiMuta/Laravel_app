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

Route::get('/main', 'MaintextController@index')->name('main' );

Route::get('/vote/{id}', 'VoteController@show')->name('vote');
Route::post('/update/{id}', 'VoteController@updateCount')->name('update');

Route::get('/post', function() {
    return view('post');
})->name('post');
Route::post('/post', 'VoteController@create');

Route::get('/delete/{id}','VoteController@showDeleteItem');
Route::post('/delete/{id}', 'VoteController@delete')->name('delete');

//Route::get('hello', 'HelloController@index');
//Route::post('hello', 'HelloController@post');


//Route::get('hello/add', 'HelloController@add');
//Route::post('hello/add', 'HelloController@create');
//
//Route::get('hello/edit', 'HelloController@edit');
//Route::post('hello/edit', 'HelloController@update');
//
//Route::get('hello/del', 'HelloController@del');
//Route::post('hello/del', 'HelloController@remove');
//
//Route::get('hello/show', 'HelloController@show');
//
//Route::get('person', 'PersonController@index');
//Route::get('person/find', 'PersonController@find');
//Route::post('person/find', 'PersonController@search');
//
//Route::get('board', 'BoardController@index');
//Route::get('board/add', 'BoardController@add');
//Route::post('board/add', 'BoardController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
