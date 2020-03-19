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
    return view('SDR');
});

Route::get('/decharges', function () {
    return view('decharges');
});

Route::post('/word', 'Files\WordTestController@newFile')->name('newWord');
Route::post('/decharge', 'Files\DechargesController@newDecharge')->name('newDecharge');
