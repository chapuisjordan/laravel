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

Route::get('test', function(){
    return view('testlayout');
});

Route::get('/show/{voyage}', function($voyage){
    return view('show', compact('voyage'));
})->name('showController');

// Route::get('/show/{voyage}', function(){
//     return view('show');
// })->name('showController');