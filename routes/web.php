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

Route::get('/about', function () {
    return view('about');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/portfolio/kristie', function(){
  return view ('kristie');
});

Route::get('/portfolio/dissolve', function(){
  return view ('dissolve');
});

Route::get('/portfolio/breeze-photography', function(){
  return view ('breeze-photography');
});




Route::get('/contact', 'ContactController@show');
Route::post('/contact',  'ContactController@mailToAdmin');
