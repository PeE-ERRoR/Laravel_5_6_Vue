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
    return view('home');
});
Route::get('/chart', function () {
    return view('chart');
});
Route::get('/datatable', function () {
    return view('datatable');
});
Route::get('/content', function () {
    return view('content');
});
Route::get('/event', function () {
    return view('event');
});
Route::post('/coins', 'CoinController@store');
Route::get('/coins', 'CoinController@index');
