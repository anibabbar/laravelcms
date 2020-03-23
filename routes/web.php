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
//
//Route::get('/Page', 'PageController@index');
//Route::get('/Page/{page}', 'PageController@show');
//Route::get('/Page/create', 'PageController@create');
//Route::get('/Page/{page}/edit', 'PageController@edit');
//Route::post('/Page', 'PageController@store');
//Route::put('/Page/{page}', 'PageController@update');
//Route::delete('/Page/{page}', 'PageController@destroy');

Route::get('Page/create', 'PageController@create');
Route::post('Page', 'PageController@store');
Route::get('Page', 'PageController@index');
Route::get('/Page/{page}', 'PageController@show');
Route::get('Page/{page}/edit', 'PageController@edit');
Route::put('Page/{page}', 'PageController@update');
Route::delete('Page/{page}/destroy', 'PageController@destroy');


Route::get('Content/create', 'ContentController@create');
Route::post('Content', 'ContentController@store');
Route::get('Content', 'ContentController@index');
Route::get('/Content/cat', 'ContentController@cat')->name('cat');
Route::get('/Content/{content}', 'ContentController@show');
Route::get('Content/{id}/edit', 'ContentController@edit');
Route::put('Content/{id}', 'ContentController@update');
Route::delete('Content/{id}/destroy', 'ContentController@destroy');

//Route::get('Content/cat', 'ContentController@cat');
Route::get('/Content/cat', 'ContentController@cat')->name('cat');
