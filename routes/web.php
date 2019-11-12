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

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Auth::routes();

Route::get('/{game_type}', 'GameController@game_type')->name('game_type');

Route::get('/games', 'GameController@index')->name('games');

Route::get('/games/{game}', 'GameController@single')->name('games');

Route::get('/games/{game}/tournaments', function() {
    return view('games.tournaments.index');
});

Route::get('/games/{game}/tournaments/{tournament}', function() {
    return view('games.tournaments.single');
});
