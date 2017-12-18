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

/*ROUTES du menu de BASE*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/Reservation', function () {
    return view('Reservation');
});

Route::get('/Administration', function () {
    return view('Administration');
});


/*ROUTES liées aux membres incluant leurs modifications...*/
Route::get('/membres', 'membresControlleur@index')->name('index');
Route::get('/membreSup/{membre}', 'membresControlleur@Suppression')->name('Supression');
Route::get('/update', 'membresControlleur@update')->name('update');
Route::get('/edit/{membre}', 'membresControlleur@create')->name('edit');

Route::post('/edit/{membre}', 'membresControlleur@store')->name('updateMembre');


/*ROUTES liées aux places incluant leurs modifications...*/
Route::get('/EditPlace', 'PlaceController@PlaceEdit')->name('placeAdmin');
Route::get('/SupPlace/{id_place}', 'PlaceController@SupPlace')->name('SupPlace');
Route::get('/place', 'PlaceController@index')->name('place');
Route::get('/placeReserve/{place}', 'PlaceController@reserv')->name('placeReserve');
Route::get('/mesReservations', 'PlaceController@MesReserv')->name('MesReserv');
Route::get('/AttribPlace/{id_place}', 'PlaceController@Uneplace')->name('attribPlace');

Route::post('/AttribPlace/{id_place}', 'PlaceController@store')->name('updatePlace');


/*ROUTES liées à la file d'attente incluant leurs modifications...*/
Route::get('/FileDattente', 'FileDattenteControlleur@index')->name('FileDattenteIndex');
Route::get('/MaListeAttente', 'FileDattenteControlleur@indexe')->name('MaListe');
Route::get('/ListesAttentes', 'FileDattenteControlleur@create')->name('ListeAttAdmin');
Route::get('/Liste/{id_user}', 'FileDattenteControlleur@UneFile')->name('ListeId');
Route::get('/SuppressionAttente/{id_user}', 'FileDattenteControlleur@Supprimer')->name('SupAttente');

Route::post('/AttribListe/{id_user}', 'FileDattenteControlleur@store')->name('updateListe');


/*ROUTES liées à l'authentification*/
Auth::routes();


/*ROUTE de BASE*/
Route::get('/home', 'HomeController@index')->name('home');
