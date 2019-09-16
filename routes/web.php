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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/games', 'GamesController@index')->name('games');

Route::get('/games/{game}', 'GamesController@single')->name('games');

Route::get('/games/{game}/tournaments', function() {
    return view('games.tournaments.index');
});

Route::get('/games/{game}/tournaments/{tournament}', function() {
    return view('games.tournaments.single');
});
