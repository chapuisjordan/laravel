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

Route::get('voyages/{id_du_voyage}', function(){
    echo 'Ceci est un test';
});


Route::get('/admin', function(){
    return view('admin.createVoyage');
});

Route::get('/', 'VoyageController@getAllTravel');

Route::get('/show/{id}', 'VoyageController@getOneTravel')->name('showController');
       
Route::post('/createVoyage', 'VoyageController@createVoyage')->name('createVoyage');

Route::get('/tableVoyages', 'VoyageController@showTable')->name('showTable');

Route::get('/oneTravelAdmin/{id}', 'VoyageController@getOneTravelAdmin')->name('getOneTravelAdmin');

Route::get('/deleteTravel/{id}', 'VoyageController@deleteOneTravel')->name('deleteOneTravelAdmin');

Route::get('/updateTravel/{id}', 'VoyageController@updateTravel')->name('updateTravel');

Route::post('/updateVoyageAction/{id}', 'VoyageController@updateTravelAction')->name('updateTravelAction');