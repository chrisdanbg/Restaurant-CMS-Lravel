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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Auth::routes();

Route::resource('recipes', 'RecipesController');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/homepage', 'AdminController@getSettings')->name('homepage');

Route::post('/admin/homepage/slider' ,[
    'uses' => 'AdminController@updateSiteName',
    'as' => 'homepage.updateSlider'
]);

Route::post('/admin/homepage/product1' ,[
    'uses' => 'AdminController@productOneUpdate',
    'as' => 'homepage.productOneUpdate'
]);

Route::post('/admin/homepage/product2' ,[
    'uses' => 'AdminController@productTwoUpdate',
    'as' => 'homepage.productTwoUpdate'
]);

Route::post('/admin/homepage/product3' ,[
    'uses' => 'AdminController@productThreeUpdate',
    'as' => 'homepage.productThreeUpdate'
]);