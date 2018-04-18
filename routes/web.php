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

Route::get('/portfolio/google-news', function(){
  return view ('google-news');
});

Route::get('/portfolio/silver-springs', function(){
  return view ('silver-springs');
});

Route::get('/portfolio/breeze-photography', function(){
  return view ('breeze-photography');
});

Route::get('/portfolio/sechelt', function(){
  return view ('sechelt');
});

Route::get('/portfolio/web-design', function(){
  return view ('web-design');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog/UXDesigner', function (){
    return view('UXDesigner');
});

Route::get('/contact', 'ContactController@show');
Route::post('/contact',  'ContactController@mailToAdmin');
