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
    return redirect('/films');
});

// FILM
Route::prefix('films')->middleware('auth')->group(function () {
  Route::get('/', 'FilmController@index');
  Route::post('/', 'FilmController@insert');
  Route::get('/create', 'FilmController@create');
  Route::get('/{slug}', 'FilmController@show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
