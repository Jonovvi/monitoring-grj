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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/monitoring','MonitoringController@index')->name('monitoring');
Route::get('/monitoring/{x}','MonitoringController@data');
Route::post('/data-kursi/{x}', 'MonitoringController@kursi')->name('kursi');
Route::post('/data-kursis/{x}', 'MonitoringController@kurkur')->name('kurkur');
