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
    return view('welcome');
});

Route::get('/Reservation', function () {
    return view('Reservation');
});

Route::get('/Administration', function () {
    return view('Administration');
});


Route::get('/membres', 'membresControlleur@index')->name('index');

//Route::get('/edit/{membre}', 'membresControlleur@edit')->name('edit');
//Route::get('/editS/{membre}', 'membresControlleur@edit')->name('editSuite');

Route::get('/membreSup/{membre}', 'membresControlleur@Suppression')->name('Supression');

Route::get('/update', 'membresControlleur@update')->name('update');

Route::get('/edit/{membre}', 'membresControlleur@create')->name('edit');
Route::post('/edit/{membre}', 'membresControlleur@store')->name('updateMembre');


Route::get('/place', 'PlaceController@index')->name('place');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
