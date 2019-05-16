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

Route::auth();

Route::get('/home', 'HomeController@index');

//Route::get('/news', 'NewsController@index')->name('news_index');
Route::post('/news', 'NewsController@store')->name('news_store');
Route::delete('/news/{news}', 'NewsController@destroy')->name('news_destroy');
Route::get('/','NewsController@index')->name('news_index');
Route::get('/news/{news}','NewsController@show')->name('news_show');