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

Route::get('/rubrik', 'RubrikController@index');
Route::get('/rubrik/create', 'RubrikController@create');
Route::post('/rubrik/store', 'RubrikController@store');
Route::get('/rubrik/{rubrik}/show', 'RubrikController@show');
Route::post('/rubrik/{rubrik}/show', 'RubrikController@storePost');

