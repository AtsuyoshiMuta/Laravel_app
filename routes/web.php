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

//Route::get('/main', function() {
//   return view('main');
//});

Route::get('/post', function() {
    return view('post');
});

Route::get('/vote/{id}', 'HomeController@vote')->name('vote');
Route::post('/update0/{id}', 'HomeController@update0')->name('update0');
Route::post('/update1/{id}', 'HomeController@update1')->name('update1');

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

Route::get('/main', 'HomeController@index')->name('main');

Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

Route::post('/post', 'HomeController@create');

Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

Route::get('hello/show', 'HelloController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
