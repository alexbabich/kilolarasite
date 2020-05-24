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


Route::get('/quizlanding', function () {
    return view('quizlanding');
});

Route::get('/quizsummary', function () {
    return view('quizsummary');
});

Route::get('/quizupsell', function () {
    return view('quizupsell');
});






Route::get('/benefitcheckpoints', function () {
    return view('benefitcheckpoints');
});

Route::get('/checkoutgummieslanding', function () {
    return view('checkoutgummieslanding');
});

Route::get('/checkoutgummies', function () {
    return view('checkoutgummies');
});

Route::get('/gummieslanding', function () {
    return view('gummieslanding');
});

Route::get('/gummies', function () {
    return view('gummies');
});

Route::get('/newupselllanding', function () {
    return view('newupselllanding');
});

Route::get('/newupsell', function () {
    return view('newupsell');
});

Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');


