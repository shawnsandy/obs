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
    return view(jarvis_views("index"), ["theme_class" => "front-page"]);
});

Route::get('/signin', function(){
    return view(jarvis_views("login"));
});

Route::get('/signup', function(){
    return view(jarvis_views('register'));
});

Route::get('/reset-password', function(){
    return view(jarvis_views('reset'));
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => config("jarvis.base_url", 'jarvis')], function () {
    // theme setup and install routes
    Jarvis::install_routes();
    // Demo pages
    Jarvis::routes();
});

Auth::routes();

Backstory::routes();

Imgfly::routes();

Route::get('/home', 'HomeController@index')->name('home');
