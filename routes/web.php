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

Auth::routes();

Route::group(['prefix' => '/administration'], function() {

    Route::get('/', 'HomeController@index')->name('administration');
    Route::get('/charts', 'HomeController@charts');
    Route::get('/tables', 'HomeController@tables');
    Route::get('/contact', 'ContactController@create')->name('create.contact');
    Route::post('/contact', 'ContactController@store')->name('store.contact');
    Route::group(['prefix' => '/devis'], function(){
        Route::get('/', 'DevisController@index');
        Route::get('/list', 'DevisController@list');
        Route::get('/new', 'DevisController@new');
    });
    Route::get('/links', 'HomeController@links')->name('links');

});
