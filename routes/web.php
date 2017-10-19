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

Route::group(['prefix' => '/administration'], function () {
    Route::get('/', 'HomeController@index')->name('administration');
    Route::get('/charts', 'HomeController@charts');
    Route::resource('/chantier', 'ChantierController');
    Route::resource('/contact', 'ContactController');
    Route::resource('/produit', 'ProduitController');
    Route::resource('/devis', 'DevisController');
    Route::get('/links', 'HomeController@links')->name('links');
});
