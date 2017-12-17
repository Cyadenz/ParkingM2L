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

// Routes liées aux modifs que peuvent apporter les admins
Route::get('/membres', 'membresControlleur@index')->name('index');

Route::get('/membreSup/{membre}', 'membresControlleur@Suppression')->name('Supression');

Route::get('/update', 'membresControlleur@update')->name('update');

Route::get('/edit/{membre}', 'membresControlleur@create')->name('edit');
Route::post('/edit/{membre}', 'membresControlleur@store')->name('updateMembre');

Route::get('/EditPlace', 'PlaceController@PlaceEdit')->name('placeAdmin');

Route::get('/SupPlace/{id_place}', 'PlaceController@SupPlace')->name('SupPlace');

Route::get('/AttribPlace/{id_place}', 'PlaceController@Uneplace')->name('attribPlace');
Route::post('/AttribPlace/{id_place}', 'PlaceController@store')->name('updatePlace');


Route::get('/place', 'PlaceController@index')->name('place');
Route::get('/placeReserve/{place}', 'PlaceController@reserv')->name('placeReserve');

Route::get('/mesReservations', 'PlaceController@MesReserv')->name('MesReserv');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
