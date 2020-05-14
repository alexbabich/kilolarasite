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
//     return view('welcome');
// });


Route::get('/gummieslanding', function () {
    return view('gummieslanding');
});

Route::get('/gummies', function () {
    return view('gummies');
});

Route::get('/newupsell', function () {
    return view('newupsell');
});

Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');


