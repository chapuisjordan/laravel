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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('voyages/{id_du_voyage}', function(){
//     echo 'Ceci est un test';
// });


// Route::get('/admin', function(){
//     return view('admin.createVoyage');
// });

// Route::get('/formCreateVoyage', function(){
//     return view('admin.createVoyage');
// })->name('formCreateVoyage');

// Route::get('/', 'VoyageController@getAllTravel');

// Route::get('/show/{id}', 'VoyageController@getOneTravel')->name('showController');
       
// Route::post('/createVoyage', 'VoyageController@createVoyage')->name('createVoyage');

// Route::get('/tableVoyages', 'VoyageController@showTable')->name('showTable');

// Route::get('/oneTravelAdmin/{id}', 'VoyageController@getOneTravelAdmin')->name('getOneTravelAdmin');

// Route::get('/deleteTravel/{id}', 'VoyageController@deleteOneTravel')->name('deleteOneTravelAdmin');

// Route::get('/updateTravel/{id}', 'VoyageController@updateTravel')->name('updateTravel');

// Route::post('/updateVoyageAction/{id}', 'VoyageController@updateTravelAction')->name('updateTravelAction');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'TopicController@index');

Route::get('/create', function(){
    return view('create');
})->name('test');

Route::get('/welcome', function(){
    return view('welcome');
});

Route::post('/createTopic', 'TopicController@createAction')->name('createTopic');


// Route::post('/comments', 'TopicController@comment')->name('commentaire');

Route::get('/delete/{id}', 'TopicController@delete')->name('deleteTopic');

Route::get('/edit/{id}', 'TopicController@edit')->name('editTopic');

Route::post('/editAction/{id}', 'TopicController@update')->name('editAction');

Auth::routes();
